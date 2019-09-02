<?php

namespace Calculator\Core\Operators;

use Calculator\Core\OperatorInterface;

class Multiply implements OperatorInterface
{
    public function calculate(int $firstNumber, int $secondNumber): string
    {
        return $firstNumber * $secondNumber;
    }
}
