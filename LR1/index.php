<?php

    // Общие настройки

    ini_set('display_errors', 1);
    error_reporting(E_ALL);

    // Константы

    define('ROOT', dirname(__FILE__));
    define('HOST', 'LR1');

    // Подключение файлов системы

    require_once(ROOT . '/Components/Router.php');
    require_once(ROOT . '/Components/Database.php');
    require_once(ROOT . '/Components/ORM.php');
    require_once(ROOT . '/Components/IController.php');

    // Роутинг

    $router = new Router();
    $router->run();