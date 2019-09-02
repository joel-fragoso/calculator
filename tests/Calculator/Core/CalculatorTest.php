<?php

class CalculatorTest extends PHPUnit\Framework\TestCase
{
    public function testCalculate()
    {
        $calculator = new \Calculator\Core\Calculator();

        $this->assertEquals(-1, $calculator->calculate(1, 2, new \Calculator\Core\Operators\Minus()));
    }
}
