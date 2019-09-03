$(document).ready(function () {

    $('.btn').click(function () {

        var data = $(this).val();

        $.ajax({

            url: 'index.php?class=HomeController&method=edit',
            type: 'POST',
            data: { data: data },
            dataType: 'json',
            success: function (response) {

                // var resp = JSON.parse(response);

                console.log(response);

            },
            error: function (response) {

                console.log(response);

            }

        });

    });

});
