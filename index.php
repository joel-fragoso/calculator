<?php

error_reporting(-1);
ini_set('display_errors', 1);

define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);

require_once ROOTPATH . 'vendor/autoload.php';

$_POST = [
    'first_number' => 1,
    'second_number' => 2,
    'operation_signal' => '+'
];

$calculator = new \Calculator\Core\Calculator();
$calculator->calculate();

var_dump($calculator);
