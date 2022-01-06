<?php

namespace Tests\Unit\Model;

use Model\GenerateRandomNumber;
use PHPUnit\Framework\TestCase;

/**
 * Class GenerateRandomNumberTest
 *
 * @package Tests\Unit\Model
 */
class GenerateRandomNumberTest extends TestCase
{
    /** @var GenerateRandomNumber  */
    private $generator;

    /** {@inheritDoc} */
    public function setUp(): void
    {
        $this->generator = new GenerateRandomNumber();
        parent::setUp();
    }

    /** {@inheritDoc} */
    public function tearDown(): void
    {
        unset($this->generator);
        parent::tearDown();
    }

    public function testGenerateRandomNumber()
    {
        $max = 10;
        $randNum = $this->generator->generate($max);

        $this->assertLessThanOrEqual($max, $randNum);
        $this->assertGreaterThanOrEqual(1, $randNum);
    }

    public function testGenerateRandomNumberException()
    {
        $errorMessage = "max must be greate than 1";

        try {
            $this->generator->generate(0);
        } catch (\Exception $e) {
            $this->assertInstanceOf(\LogicException::class, $e);
            $this->assertEquals($errorMessage, $e->getMessage());
        }
    }
}