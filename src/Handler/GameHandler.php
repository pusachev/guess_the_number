<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Handler;

use Factory\Result\GameResultFactoryInterface;
use Model\Result\GameResultInterface;

class GameHandler implements GameHandlerInterface
{
    /** @var GameResultFactoryInterface  */
    private $gameResultFactory;

    /**
     * @param GameResultFactoryInterface $gameResultFactory
     */
    public function __construct(GameResultFactoryInterface $gameResultFactory)
    {
        $this->gameResultFactory = $gameResultFactory;
    }

    /** {@inheritDoc} */
    public function handle(int $randNumber, int $currentNumber) : GameResultInterface
    {
        $isCorrect = false;
        $message = '';

        if ($randNumber > $currentNumber) {
            $message = "Generated number is greater than current number";
        }

        if ($randNumber < $currentNumber) {
            $message = "Generated number is less than current number";
        }

        if ($randNumber === $currentNumber) {
            $message = "Congratulations you have won!";
            $isCorrect = true;
        }

        return $this->gameResultFactory->create($isCorrect, $message);
    }
}