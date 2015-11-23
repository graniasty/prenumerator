<?php

include "common.php";
//ladna funkcja do autoloader - str_replace jest potzrbny do takich klas jak zend
function loader($mewa) {
    $plik = str_replace("_", "/", "$mewa.php");
    require_once $plik;
}
//funkcja, ktora dziala zamiast autoloadera, w przypadku powolywania nowego obiektu - a klasa tego obiektu nie jest wczytana - przed wyrzuceniem bledu dziala ta funkcja - w tym przypadku odpala funkcje loader, przekazujac jej jako parametr-zmienna nazwe szukanej klasy
spl_autoload_register("loader");
$testu = $_REQUEST['action'];
//echo "zmienna action $testu ";
// jezeli nie ma ustawionej zmiennej akcja
if (isset($_REQUEST["action"])) {
    $nazwaAkcji = $_REQUEST["action"];
}else{
    
    $bezaction = 1;
}
//nawet jesli jest zmienna akcja a nie jest zalogowany to jedziemy do logowania
if (!isset($_SESSION['status'])){
        $bezaction = 1;
	//$nazwaAkcji = "Login";
	}
 if ($bezaction == 1){       
include "Logino.php";
 }
 
 if ($_SESSION[status]==1){
     echo "zalogowany pracownik";
 }else if ($_SESSION[status]==2){
     echo "zalogowany kierownik";
 }else if ($_SESSION[status]==3){
     echo "zalogowany szef wszystkich szefów";
 }
 
//echo "nazwa akcji $nazwaAkcji";
//sztuczka pozwalająca na używanie różnych kontrolerów w tym miejscu, pod warunkiem, ze beda zapisane w katalogu klasy
$nazwaKlasy = "Controller$nazwaAkcji";

$kontroler = new $nazwaKlasy();
//ustawienie nowych obiektow klasy zend db i smarty jako danych wejsciowych do obiektu kontroler
$kontroler->setDb($db);
$kontroler->setView($smarty);
//funkcja, ktora w kazdym kontrolerze nazywa sie tak samo, a robi co innego
$kontroler->action();
//i wtym momencie przechodzi dzianie sie do kontrolera
