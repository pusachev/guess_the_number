<?php
/**
 * @author     Pavel Usachev <pausachev@gmail.com>
 * @copyright  2021 Pavel Usachev
 */

namespace Factory;

use Entity\User;
use Entity\UserInterface;

/**
 * Class UserFactory
 *
 * @package Factory
 */
class UserFactory implements UserFactoryInterface
{
    /** {@inheritDoc} */
    public function create(string $name): UserInterface
    {
        return new User($name);
    }
}
