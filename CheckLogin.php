<?php
include "common.php";
$login = $_REQUEST["login"];
$haslo = $_REQUEST["haslo"];
$login=pg_escape_string($login);
$haslo=pg_escape_string($haslo);
$test = md5 ("$haslo||$login");
$wynik = $db->fetchAll("select * from uzytkownicy where login = ? and haslo_hasz = ? ", array ($login, $test));
if ($wynik) {
  $_SESSION['status'] = $wynik["0"]["kategoria_uzyt"];
  $_SESSION['login'] = $wynik["0"]["login"];
  header ("Location: index.php?action=ListPrenum");

  
  } else {
  
  header ("Location: index.php");
  };
 