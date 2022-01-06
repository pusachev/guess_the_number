<?php

namespace Tests\Unit\Handler;

use Factory\Result\GameResultFactory;
use Handler\GameHandler;
use PHPUnit\Framework\TestCase;

/**
 * Class GameHandlerTest
 *
 * @package Tests\Unit\Handler
 */
class GameHandlerTest extends TestCase
{
    /**
     * @var GameResultFactory
     */
    private $gameResultFactory;

    /** {@inheritDoc}] */
    public function setUp(): void
    {
        $this->gameResultFactory = new GameResultFactory();
        parent::setUp();
    }

    /** {@inheritDoc}] */
    public function tearDown(): void
    {
        unset($this->gameResult);
        parent::tearDown();
    }

    /**
     * @dataProvider handleResultDataProvider
     *
     * @param int    $randNum
     * @param int    $currentNum
     * @param bool   $expectedIsCorrect
     * @param string $expectedMessage
     */
    public function testHandle(
        int $randNum,
        int $currentNum,
        bool $expectedIsCorrect,
        string $expectedMessage
    ) {
        $gameHandler = new GameHandler($this->gameResultFactory);

        $result = $gameHandler->handle($randNum, $currentNum);

        $this->assertEquals($expectedIsCorrect, $result->isCorrect());
        $this->assertEquals($expectedMessage, $result->getMessage());
    }

    public function handleResultDataProvider()
    {
        return [
            [1, 1, true, "Congratulations you have won!"],
            [1, 2, false, "Generated number is less than current number"],
            [2, 1, false, "Generated number is greater than current number"]
        ];
    }
}