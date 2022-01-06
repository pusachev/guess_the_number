<?php

namespace Console\Command;

use Symfony\Component\Console\Command\Command;

/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */
class Test extends Command
{
    /**
     * @var string
     */
    protected static $defaultName = 'app:test:test';

    /**
     * @param \Symfony\Component\Console\Input\InputInterface   $input
     * @param \Symfony\Component\Console\Output\OutputInterface $output
     *
     * @return int
     */
    protected function execute(\Symfony\Component\Console\Input\InputInterface $input, \Symfony\Component\Console\Output\OutputInterface $output)
    {
        $output->writeln(__METHOD__);

        return Command::SUCCESS;
    }
}