<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Handler;

use Model\Result\GameResultInterface;

interface GameHandlerInterface
{
    public function handle(int $randNumber, int $currentNumber) : GameResultInterface;
}