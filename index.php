<?php

error_reporting(-1);
ini_set('display_errors', 1);

define('ROOTPATH', __DIR__ . DIRECTORY_SEPARATOR);
define('SYSPATH', ROOTPATH . 'system' . DIRECTORY_SEPARATOR);
define('APPPATH', ROOTPATH . 'application' . DIRECTORY_SEPARATOR);
define('VIEWS', APPPATH . 'Views' . DIRECTORY_SEPARATOR);

require_once ROOTPATH . 'vendor/autoload.php';

$class = isset($_GET['class']) ? '\App\Controllers\\' . $_GET['class'] : '\App\Controllers\HomeController';

$method = isset($_GET['method']) ? strtolower($_GET['method']) : 'index';

unset($_GET['class'], $_GET['method']);

$params = isset($_GET) ? $_GET : [];

$controller = new $class();

call_user_func_array([$controller, $method], $params);
