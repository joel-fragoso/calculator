<?php

namespace Calculator\Core;

class Calculator
{
    private $_data;

    public function __construct()
    {
        $this->_data =& $_POST;
    }

    public function getData()
    {
        return $this->_data;
    }

    public function calculate()
    {
        return $this->_data;
    }
}
