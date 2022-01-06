<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Handler;

use Model\Result\GameResultInterface;

/**
 * Interface GameHandlerInterface
 *
 * @package Handler
 */
interface GameHandlerInterface
{
    /**
     * @param int $randNumber
     * @param int $currentNumber
     *
     * @return GameResultInterface
     */
    public function handle(int $randNumber, int $currentNumber) : GameResultInterface;
}