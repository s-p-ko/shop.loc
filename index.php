<?php

// FRONT CONTROLLER

// Общие настройки
ini_set('display_errors',1);
error_reporting(E_ALL);

session_start(); // старт для всех сессий проекта!

// Подключение файлов системы
define('ROOT', dirname(__FILE__));//определяем констнту ROOT
//dirname — Возвращает имя родительского каталога из указанного пути
//__FILE__ The full path and filename of the file with symlinks resolved.
//If used inside an include, the name of the included file is returned.
require_once(ROOT.'/components/Autoload.php'); // подключение всех контроллеров, отпадает потребность их включения,
                                                //на тех страницах, где они были нужны т.е. requare_once


// Вызов Router
$router = new Router();
$router->run();
