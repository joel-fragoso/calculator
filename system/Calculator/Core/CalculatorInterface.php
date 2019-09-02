<?php

namespace Calculator\Core;

interface CalculatorInterface
{
    public function calculate(int $firstNumber, int $secondNumber, OperatorInterface $operator): string;
}
