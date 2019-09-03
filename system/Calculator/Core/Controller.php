<?php

namespace Calculator\Core;

class Controller
{
    public function view($view, $data = [])
    {
        $viewPath = VIEWS . $view . '.php';

        if (! file_exists($viewPath)) {

            echo 'Error';
            exit();

        }

        require_once $viewPath;
    }
}
