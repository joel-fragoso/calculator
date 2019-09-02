<?php

error_reporting(-1);
ini_set('display_errors', 1);

define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);

require_once ROOTPATH . 'vendor/autoload.php';

try {

    $_POST = [
        'first_number' => 1,
        'second_number' => 2,
        'operation_signal' => '-'
    ];

    $calculator = new \Calculator\Core\Calculator();

    $calculatorWrapper = new \Calculator\Core\Wrappers\CalculatorWrapper($calculator);

    $result = $calculatorWrapper->calculate($_POST['first_number'], $_POST['second_number'], $_POST['operation_signal']);

    var_dump($result);

} catch (\Exception $e) {

    $e->getMessage();
    
}
