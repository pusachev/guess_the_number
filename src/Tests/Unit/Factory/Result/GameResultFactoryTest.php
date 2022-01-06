<?php

namespace Tests\Unit\Factory\Result;

use Factory\Result\GameResultFactory;
use Model\Result\GameResultInterface;
use PHPUnit\Framework\TestCase;

/**
 * Class GameResultFactoryTest
 *
 * @package Tests\Unit\Factory\Result
 */
class GameResultFactoryTest extends TestCase
{
    public function testGameResultCreate()
    {
        $isCorrect = true;
        $message = 'testMessage';

        $gameResultFactory = new GameResultFactory();
        $gameResult = $gameResultFactory->create($isCorrect, $message);

        $this->assertEquals($isCorrect, $gameResult->isCorrect());
        $this->assertEquals($message, $gameResult->getMessage());
        $this->assertInstanceOf(GameResultInterface::class, $gameResult);
    }
}