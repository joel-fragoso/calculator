<?php

namespace App\Controllers;

use Calculator\Core\Controller;

class HomeController extends Controller
{
    public function index()
    {
        try {

            $_POST = [
                'first_number' => 1,
                'second_number' => 2,
                'operation_signal' => '-'
            ];

            $calculator = new \Calculator\Core\Calculator();

            $calculatorWrapper = new \Calculator\Core\Wrappers\CalculatorWrapper($calculator);

            $result = $calculatorWrapper->calculate($_POST['first_number'], $_POST['second_number'], $_POST['operation_signal']);

        } catch (\Exception $e) {

            $e->getMessage();

        }

        $this->view('home/index');
    }

    public function edit()
    {
        if ($_POST) {

            echo json_encode($_POST);

        }
    }
}
