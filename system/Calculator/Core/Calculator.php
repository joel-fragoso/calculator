<?php

namespace Calculator\Core;

class Calculator implements CalculatorInterface
{
    public function calculate(int $firstNumber, int $secondNumber, OperatorInterface $operator): string
    {
        return $operator->calculate($firstNumber, $secondNumber);
    }
}
