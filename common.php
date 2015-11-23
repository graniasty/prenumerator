<?php

header("Content-type: text/html; charset=utf-8");
//opisanie sciezki dostepu na serwerze students do katalogu z klasami
set_include_path("/var/www/zasoby/library/:class");

//przywolanie Smartiego
require_once 'libs/Smarty.class.php';
session_start();
include "Zend/Db/Adapter/Pdo/Mysql.php";

$konfiguracja = array(
    "dbname" => "13938913_1",
	"username" => "13938913_1",
	"password" => "tymrazemsilne2",

);
$db = new Zend_Db_Adapter_pdo_Mysql($konfiguracja);
$smarty = new Smarty();



