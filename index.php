<?php

ini_set('error_reporting', E_ALL);
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);

require_once __DIR__ . '/core/Autoloader.php';
spl_autoload_register(['Autoloader', 'loadClass']);

$router = new Router();
echo $router->exec();
