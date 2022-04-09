<?php

declare(strict_types=1);

namespace bmykyta\Sum\Tests;

use bmykyta\Sum\Sum;
use PHPUnit\Framework\TestCase;

class SumTest extends TestCase
{
    /**
     * @author bmykyta
     */
    public function testAddition(): void
    {
        $sum = new Sum();

        $this->assertEquals(2, $sum->calculate(1, 1));
        $this->assertEquals(3, $sum->calculate(1.5, 1.5));
        $this->assertEquals(0.123456789, $sum->calculate(0.0617283945, 0.0617283945));
    }

    public function testStaticSum()
    {
        self::assertEquals(5.5, Sum::calculate(2.5, 3));
        self::assertEquals(2077, Sum::calculate(1039, 1038));
    }

    /**
     * @author bmykyta
     * @dataProvider additionWithNegativeNumbersProvider
     * @dataProvider additionWithNonNegativeNumbersProvider
     */
    public function testAdd(int|float $augend, int|float $addend, int|float $expected): void
    {
        $sum = new Sum();

        $this->assertEquals($expected, $sum->calculate($augend, $addend));
    }

    public function additionWithNonNegativeNumbersProvider(): array
    {
        return [
            [0, 1, 1],
            [2.2, 2.2, 4.4],
            [1.57, 1.57, 3.14],
            [1016, 1006, 2022],
        ];
    }

    public function additionWithNegativeNumbersProvider(): array
    {
        return [
            [-3, -3, -6],
            [-1, 1, 0],
            [-8, 9, 1],
        ];
    }
}