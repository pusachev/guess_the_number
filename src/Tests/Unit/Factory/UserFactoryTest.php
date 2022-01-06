<?php

namespace Tests\Unit\Factory;

use Entity\UserInterface;
use Factory\UserFactory;
use PHPUnit\Framework\TestCase;

/**
 * Class UserFactoryTest
 *
 * @package Tests\Unit\Factory
 */
class UserFactoryTest extends TestCase
{
    public function testUserCreate()
    {
        $testName = 'testName';

        $userFactory = new UserFactory();

        $user = $userFactory->create($testName);

        $this->assertEquals($testName, $user->getName());
        $this->assertEquals(0, $user->getScore());
        $this->assertInstanceOf(UserInterface::class, $user);
    }
}