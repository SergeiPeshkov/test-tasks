<?php

//FRONT CONTROLLER

//1. общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы

define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');

//3.подключение к бд 

//4. вызов роутера

  


?>