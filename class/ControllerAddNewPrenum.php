<?php

require_once "Controller.php";

class ControllerAddNewPrenum extends Controller {

    function action() {
        
        $imie = mysql_escape_string($_REQUEST['imie']);
        $nazwisko = mysql_escape_string($_REQUEST['nazwisko']);
        $pesel = mysql_escape_string($_REQUEST['pesel']);
        $adres = mysql_escape_string($_REQUEST['adres']);
        $miasto = mysql_escape_string($_REQUEST['miasto']);
        $kod = mysql_escape_string($_REQUEST['kod']);
        $dl_prenum = mysql_escape_string($_REQUEST['dl_prenum']);
        
        $today = date('Y-m-d');
        $datapom = explode("-", $today );
        $miesiac_waznosci = $datapom[1] + $dl_prenum;
        $rok_waznosci = $datapom[0];
        if($miesiac_waznosci > 12){
            $miesiac_waznosci = $miesiac_waznosci - 12;
            $rok_waznosci = $rok_waznosci+1;
           
        }
        
        $data_waznosci = $rok_waznosci."-".$miesiac_waznosci."-".$datapom[2] ;
        $tablica = array(
        "imie_prenum" => $imie,
        "nazwisko_prenum" => $nazwisko,
        "pesel_prenum" => $pesel,
        "adres_prenum" => $adres,
        "miasto_prenum" => $miasto,
        "kod_prenum" => $kod,
        "data_wpisu" => $today,
        "data_waznosci" => $data_waznosci,
        "status_prenum" => 1
        );
        var_dump($tablica);
        $this->getDb()->insert("prenumerator", $tablica);

        $prenum = $this->getDb()->fetchAll("select * from prenumerator");
        $view = $this->getView();
        $view->assign("klienci", $prenum);
        $view->display("prenum.tpl");
    }

}
