<?php
/*
$string='21-11-2015';
$pattern = '/([0-9]{2})-([0-9]{2})-([0-9]{4})/';
$replacement ='Month: $2, Day: $1, Year: $3 ';
echo preg_replace($pattern, $replacement, $string );
echo "<br>";
die;*/

//FRONT CONTROLLER

//1. общие настройки
ini_set('display_errors', 1);
error_reporting(E_ALL);

//2. Подключение файлов системы

define('ROOT', dirname(__FILE__));

require_once(ROOT.'/components/Router.php');
include_once ROOT.'/components/Db.php';

//3.подключение к бд 

//4. вызов роутера
$router= new Router();
$router->run();

  


?>