<?php

namespace Calculator\Core\Wrappers;

use Calculator\Core\WrapperInterface;
use Calculator\Core\CalculatorInterface;

class CalculatorWrapper implements WrapperInterface
{
    const PLUS = '+';

    const MINUS = '-';

    const MULTIPLY = '*';

    const DIVIDE = '/';

    private $_calculator;

    public function __construct(CalculatorInterface $calculator)
    {
        $this->_calculator = $calculator;
    }

    public function calculate(int $firstNumber, int $secondNumber, string $operator): string
    {
        $_operator = $this->createOperator($operator);

        return $this->_calculator->calculate($firstNumber, $secondNumber, $_operator);
    }

    public function createOperator($type)
    {
        switch ($type) {
            case self::PLUS:
                return new \Calculator\Core\Operators\Plus();
                break;
            case self::MINUS:
                return new \Calculator\Core\Operators\Minus();
                break;
            case self::MULTIPLY:
                return new \Calculator\Core\Operators\Multiply();
                break;
            case self::DIVIDE:
                return new \Calculator\Core\Operators\Divide();
                break;
            default:
                throw new \Exception('A operação informada não é válida.');
                // no break;
        }
    }
}
