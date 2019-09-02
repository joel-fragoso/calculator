<?php

namespace Calculator\Core\Operators;

use Calculator\Core\OperatorInterface;

class Divide implements OperatorInterface
{
    public function calculate(int $firstNumber, int $secondNumber): string
    {
        return $firstNumber / $secondNumber;
    }
}
