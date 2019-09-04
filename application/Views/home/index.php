<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta http-equiv="x-ua-compatible" content="ie=edge, chrome=1">
        <link rel="stylesheet" href="assets/css/application.css">
        <title>Calculator</title>
    </head>
    <body>

        <form class="calculator">

            <div class="calculator-head">
                <div class="row">
                    <div class="col-12">
                        <input class="display" type="text" name="display" value="0" readonly>
                    </div>
                </div>
            </div>

            <div class="calculator-body">

                <div class="row">
                    <div class="col-3">
                        <button class="btn-clear gray" type="button" name="button" value="AC">AC</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-invert-signal gray" type="button" name="button" value="+/-">+/-</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-percent gray" type="button" name="button" value="&#37;">&#37;</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-operator orange" type="button" name="button" value="/">/</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="7">7</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="8">8</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="9">9</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-operator orange" type="button" name="button" value="*">*</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="4">4</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="5">5</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="6">6</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-operator orange" type="button" name="button" value="+">+</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="1">1</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="2">2</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-number" type="button" name="button" value="3">3</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-operator orange" type="button" name="button" value="-">-</button>
                    </div>
                </div>

                <div class="row">
                    <div class="col-6">
                        <button class="btn-number" type="button" name="button" value="0">0</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-comma" type="button" name="button" value=".">.</button>
                    </div>
                    <div class="col-3">
                        <button class="btn-equal orange" type="button" name="button" value="=">=</button>
                    </div>
                </div>

            </div>

        </form>

        <script src="assets/js/jquery.min.js"></script>
        <script src="assets/js/calculator.js"></script>
        <!-- <script src="assets/js/application.js"></script> -->
    </body>
</html>
