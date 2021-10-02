<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Model\Result;

interface GameResultInterface
{
    /**
     * @return bool
     */
    public function isCorrect() : bool;

    /**
     * @return string
     */
    public function getMessage() : string;
}