<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Factory\Result;

use Model\Result\GameResult;
use Model\Result\GameResultInterface;

class GameResultFactory implements GameResultFactoryInterface
{
    /** {@inheritDoc} */
    public function create(bool $isCorrect, string $message): GameResultInterface
    {
        return new GameResult($isCorrect, $message);
    }
}