$(document).ready(function () {

    var display = $('.display');

    var sentence = '';

    $('.btn-clear').click(function () {

        sentence = '';

        display.val(0);

    });

    $('.btn').click(function () {

        if (sentence.length < 9) {

            if ($.isNumeric($(this).val())) {

                sentence += $(this).val();

                display.val(sentence);

            } else if ($.inArray($(this).val(), ['+', '-', '*', '/', ',']) !== '-1') {

                if ($(this).val() !== sentence.charAt(sentence.length - 1)) {
                    sentence += $(this).val();

                    display.val(sentence);
                }

            }

        }

    });

    $('.btn-equal').click(function () {

        $.ajax({

            url: 'index.php?class=HomeController&method=edit',
            type: 'POST',
            data: { sentence: sentence },
            dataType: 'json',
            success: function (response) {

                console.log(response);

            },
            error: function (response) {

                console.log(response);

            }

        });

    });

});
