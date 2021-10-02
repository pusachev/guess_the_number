<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Entity;

interface UserInterface
{
    /**
     *  Get User name
     *
     * @return string
     */
    public function getName() : string;

    /**
     * Get user score
     *
     * @return int
     */
    public function getScore() : int;

    /**
     *  Calculate user score
     *
     * @return void
     */
    public function calculateScore() : void;
}