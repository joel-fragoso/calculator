$(document).ready(function () {

    var firstNumber;

    var secondNmber;

    var operator;

    var display = $('.display');

    $('.btn-clear').click(function () {
        clearDisplay();
    });

    $('.btn-number').click(function () {
        if (setLimitChar(9)) {
            $('.btn-operator').css({'box-shadow': 'none'});
            if (display.val().charAt(0) === '0') {
                if (display.val().charAt(1) === '.') {
                    display.val(display.val() + $(this).val());
                } else {
                    display.val($(this).val());
                }
            } else {
                display.val(display.val() + $(this).val());
            }
        }
    });

    $('.btn-comma').click(function ()  {
        if (setLimitChar(9)) {
            if (display.val() === '') {
                display.val('0' + $(this).val());
            } else {
                display.val(display.val() + $(this).val());
            }
        }
    });

    $('.btn-invert-signal').click(function () {
        if (setLimitChar(9)) {
            if (display.val().charAt(0) === '' || $.isNumeric(display.val().charAt(0))) {
                display.val('-' + display.val());
            } else {
                var temp = display.val().replace(display.val().charAt(0), '');

                display.val(temp);
            }
        }
    });

    $('.btn-operator').click(function () {
        if (setLimitChar(9)) {
            if (display.val() !== '') {
                firstNumber = parseFloat(display.val());
                operator = $(this).val();
                $(this).css({'box-shadow': 'inset 0 0 0 2px black'});
                clearDisplay();
            } else {
                alert('Informe um número');
            }
        }
    });

    $('.btn-percent').click(function () {
        if (display.val() !== '') {
            secondNmber = parseFloat(display.val());

            var result = percent(firstNumber, secondNmber, operator);
            display.val(result);
        }
    });

    $('.btn-equal').click(function () {
        if (display.val() !== '') {
            secondNmber = parseFloat(display.val());

            switch (operator) {
                case '+':
                    display.val(firstNumber + secondNmber);
                    break;
                case '-':
                    display.val(firstNumber - secondNmber);
                    break;
                case '*':
                    display.val(firstNumber * secondNmber);
                    break;
                case '/':
                    display.val(firstNumber / secondNmber);
                    break;
            }
        } else {
            alert('Informe um número');
        }
    });

    function clearDisplay() {
        display.val('0');
    };

    function setLimitChar(number) {
        return (display.val().length < number) ? true : false;
    }

    function getLastChar() {
        var len = display.val().length;

        return (len) ? display.val()[len - 1] : '';
    }

    function percent(num1, num2, op) {
        var result;
        switch (op) {
            case '-':
                result = num1 - ((num2 * 100) / num1);
                break;
            case '*':
                result = ((num2 / 100) * num1) ;
                break;
        }
        return result;
    }

});
