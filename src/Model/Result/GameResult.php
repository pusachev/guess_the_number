<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Model\Result;

/**
 * Class GameResult
 *
 * @package Model\Result
 */
class GameResult implements GameResultInterface
{
    /** @var bool */
    private $isCorrect;
    
    /** @var string */
    private $message;

    /**
     * @param bool   $isCorrect
     * @param string $message
     */
    public function __construct(bool $isCorrect, string $message)
    {
        $this->isCorrect = $isCorrect;
        $this->message   = $message;
    }

    /** {@inheritDoc} */
    public function isCorrect(): bool
    {
       return $this->isCorrect;
    }

    /** {@inheritDoc} */
    public function getMessage(): string
    {
        return $this->message;
    }
}