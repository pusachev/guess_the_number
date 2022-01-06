<?php

namespace Tests\Unit\Entity;

use Entity\User;
use PHPUnit\Framework\TestCase;

/**
 * Class UserTest
 *
 * @package Tests\Unit\Entity
 */
class UserTest extends TestCase
{
   public function testUserCreate()
   {
       $name = 'testName';
       $startScore = 0;

       $user = new User($name);

       $this->assertEquals($name ,$user->getName());
       $this->assertEquals($startScore, $user->getScore());
   }

   public function testUserScore()
   {
       $name = 'testName';
       $startScore = 0;

       $user = new User($name);

       $this->assertEquals($startScore, $user->getScore());
       $user->calculateScore();
       $this->assertEquals($startScore + 1, $user->getScore());
   }
}