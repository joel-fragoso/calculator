<?php

namespace Calculator\Core;

interface WrapperInterface
{
    public function calculate(int $firstNumber, int $secondNumber, string $operator): string;
}
