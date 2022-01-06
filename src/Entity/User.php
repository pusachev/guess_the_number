<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Entity;

/**
 * Class User
 *
 * @package Entity
 */
class User implements UserInterface
{
    /** @var string */
    private $name;

    /** @var int */
    private $score;

    /**
     * @param string $name
     */
    public function __construct(string $name)
    {
        $this->name     = $name;
        $this->score    = 0;
    }

    /** {@inheritDoc} */
    public function getName(): string
    {
        return $this->name;
    }

    /** {@inheritDoc} */
    public function getScore(): int
    {
        return $this->score;
    }

    /** {@inheritDoc} */
    public function calculateScore(): void
    {
        $this->score++;
    }
}