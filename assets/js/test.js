class Calculator {
    constructor() {
        this._numbers = [];
        this._operators = [];
    }

    set number(number) {
        this._numbers.push(number);
    }

    get number() {
        return this._numbers;
    }

    set operator(operator) {
        this._operators.push(operator);
    }

    get operator() {
        return this._operators;
    }
}

var calculator = new Calculator();
calculator.number = '5';
calculator.number = '3';
calculator.operator = '+';
calculator.operator = '-';
calculator.operator = '*';
calculator.operator = '/';

console.log(calculator.number);
console.log(calculator.operator);
