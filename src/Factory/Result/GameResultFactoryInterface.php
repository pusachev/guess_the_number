<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Factory\Result;

use Model\Result\GameResultInterface;

/**
 * Interface GameResultFactoryInterface
 *
 * @package Factory\Result
 */
interface GameResultFactoryInterface
{
    /**
     * @param bool   $isCorrect
     * @param string $message
     *
     * @return GameResultInterface
     */
    public function create(bool $isCorrect, string $message) : GameResultInterface;
}