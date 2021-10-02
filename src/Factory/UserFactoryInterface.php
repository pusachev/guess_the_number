<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Factory;

use Entity\UserInterface;

interface UserFactoryInterface
{
    /**
     * @param string $name
     * @return UserInterface
     */
    public function create(string $name) : UserInterface;
}