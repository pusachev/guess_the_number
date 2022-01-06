<?php

namespace Console\Command;

use Entity\UserInterface;
use Factory\UserFactoryInterface;
use Handler\GameHandlerInterface;
use Model\GenerateRandomNumberInterface;
use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Component\Console\Question\ConfirmationQuestion;
use Symfony\Component\Console\Question\Question;

class GameCommand extends Command
{
    /** @var UserFactoryInterface  */
    private $userFactory;

    /** @var GameHandlerInterface */
    private $gameHandler;

    /** @var GenerateRandomNumberInterface */
    private $generator;

    /**
     * @param UserFactoryInterface          $userFactory
     * @param GameHandlerInterface          $gameHandler
     * @param GenerateRandomNumberInterface $generateRandomNumber
     * @param string|null                   $name
     */
    public function __construct(
        UserFactoryInterface $userFactory,
        GameHandlerInterface $gameHandler,
        GenerateRandomNumberInterface $generateRandomNumber,
        string $name = null
    ) {
        $this->userFactory = $userFactory;
        $this->gameHandler = $gameHandler;
        $this->generator   = $generateRandomNumber;
        parent::__construct($name);
    }

    /**
     * @param InputInterface  $input
     * @param OutputInterface $output
     *
     * @return int
     */
    protected function execute(InputInterface $input, OutputInterface $output): int
    {
        while (true) {
            $helper = $this->getHelper('question');

            $question = new Question("Please enter your name: ");
            $question->setValidator(function ($answer) {
                if (empty($answer)) {
                    throw new \RuntimeException("Please enter correct name");
                }

                return $answer;
            });
            $userName = $helper->ask($input, $output, $question);

            $user = $this->userFactory->create($userName);

            $output->writeln(sprintf("Hello %s", $user->getName()));

            $question = new Question("Please enter your random number from 2 to 100: ");
            $question->setValidator(function ($answer) {
                if ((int) $answer <= 1 || (int)$answer > 100) {
                    throw new \RuntimeException("The number must be greater than 1 and less than 100");
                }

                return $answer;
            });
            $maxNumber = $helper->ask($input, $output, $question);

            $randomNumber = $this->generator->generate((int)  $maxNumber);

            while (true) {

                $question = new Question("Please enter your number from 1 to 100: ");
                $question->setValidator(function ($answer) {
                    if ((int) $answer < 1 || (int)$answer > 100) {
                        throw new \RuntimeException("The number mus be greater than 0 and less than 100");
                    }

                    return $answer;
                });
                $userNumber = $helper->ask($input, $output, $question);
                $result = $this->gameHandler->handle((int)$randomNumber, (int)$userNumber);

                $user->calculateScore();
                $output->writeln($result->getMessage());

                if ($result->isCorrect()) {
                    $output->writeln(sprintf("Your score %d", $user->getScore()));
                    break;
                }
            }

            $question = new ConfirmationQuestion('Continue? [y\N]', false);

            if (!$helper->ask($input, $output, $question)) {
                break;
            }
        }

        return Command::SUCCESS;
    }
}
