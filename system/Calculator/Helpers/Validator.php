<?php

namespace Calculator\Helpers;

class Validator
{
    private $_field;

    private $_label;

    private $_errors;

    private $_post;

    public function __construct()
    {
        $this->_field = null;
        $this->_label = null;
        $this->_errors = [];
        $this->_post =& $_POST;
    }

    public function run()
    {
        return empty($this->_errors) ? true : false;
    }

    public function required()
    {
        if (empty($this->getPost($this->_field))) {
            $this->setError("O campo {$this->_label} é obrigatório.");
        }
    }

    public function int()
    {
        if (! is_numeric($this->getPost($this->_field))) {
            $this->setError("O campo {$this->_label} deve ser do tipo inteiro.");
        }
    }

    public function setError($msg)
    {
        $this->_errors[$this->_field][] = $msg;
    }

    public function getPost($name)
    {
        return $this->_post[$name] ?? null;
    }
}
