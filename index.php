<?php
// PHP runtime configuration.
ini_set('date.timezone', 'Asia/Saigon');
ini_set('display_errors', true);
ini_set('error_reporting', E_ALL);

// Pre-define application constant
define('APP_PATH_ROOT', __DIR__);
define('APP_PATH_VIEW', __DIR__ . '/views');
define('APP_PATH_CLASS', __DIR__ . '/classes');

// App initialize
$loader = require __DIR__ . '/vendor/autoload.php';
$routes = require __DIR__ . '/config/route.php';

$loader->add('', APP_PATH_CLASS);
$app = new Questwork\App(new Questwork\Request, new Questwork\Response);

// App setup & execution
$app->errorHandler(function ($error, $message) {
    if ($error != E_NOTICE) {
        exit(new Questwork\View('error', ['message' => $message]));
    }
})->loadHooks(__DIR__ . '/hooks')->execute($routes);