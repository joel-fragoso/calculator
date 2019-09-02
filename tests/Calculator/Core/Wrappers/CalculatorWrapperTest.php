<?php

class CalculatorWrapperTest extends PHPUnit\Framework\TestCase
{
    public function testCalculate()
    {
        $calculatorWrapper = new \Calculator\Core\Wrappers\CalculatorWrapper(new \Calculator\Core\Calculator);

        $this->assertEquals(-1, $calculatorWrapper->calculate(1, 2, '-'));
    }

    public function testCreateOperator()
    {
        $calculatorWrapper = new \Calculator\Core\Wrappers\CalculatorWrapper(new \Calculator\Core\Calculator);

        $this->assertEquals(new \Calculator\Core\Operators\Plus(), $calculatorWrapper->createOperator('+'));
    }
}
