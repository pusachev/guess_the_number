<?php

namespace Tests\Unit\Model\Result;

use Model\Result\GameResult;
use PHPUnit\Framework\TestCase;

/**
 * Class GameResultTest
 *
 * @package Tests\Unit\Model\Result
 */
class GameResultTest extends TestCase
{
    public function testGameResult()
    {
        $isCorrect = true;
        $message = 'testMessage';

        $gameResult = new GameResult($isCorrect, $message);

        $this->assertEquals($isCorrect, $gameResult->isCorrect());
        $this->assertEquals($message, $gameResult->getMessage());
    }
}