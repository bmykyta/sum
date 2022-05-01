<?php

namespace bmykyta\Sum\Tests;

use bmykyta\Sum\Sum;
use PHPUnit\Framework\TestCase;

class AnotherSumTest extends TestCase
{
    protected function setUp(): void
    {
        $this->sum = new Sum();
    }

    public function testGetsCalculateResultFromTwoPlusTwo()
    {
        $addend = $augend = 2;
        $result = $this->sum->calculate($augend, $addend);

        $this->assertTrue(is_int($result));
        $this->assertEquals(4, $result);
    }

    public function testGetsCalculateResultWhenCalledWithoutParams(): void
    {
        $this->expectException('ArgumentCountError');
        $this->expectExceptionMessage('Too few arguments to function');

        /** @noinspection PhpExpressionResultUnusedInspection */
        /** @noinspection PhpParamsInspection */
        $this->sum->calculate();
    }

    public function testGetsCalculateResultFromOneNegativeNumber()
    {
        $augend = -10;
        $addend = 5;

        $result = $this->sum->calculate($augend, $addend);

        $this->assertTrue(is_int($result));
        $this->assertEquals(-5, $result);
    }

    public function testGetsCalculateResultFromFloat()
    {
        $augend = 1.005;
        $addend = 2;

        $result = $this->sum->calculate($augend, $addend);

        $this->assertTrue(is_float($result));
        $this->assertEquals(3.005, $result);
        $this->assertNotEquals(3, $result);
    }
}
