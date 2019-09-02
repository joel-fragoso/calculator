<?php

namespace Calculator\Core;

interface OperatorInterface
{
    public function calculate(int $fistNumber, int $secondNumber): string;
}
