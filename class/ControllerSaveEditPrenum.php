<?php

require_once "Controller.php";

class ControllerSaveEditPrenum extends Controller {

    function action() {
        $id_prenum = mysql_escape_string($_REQUEST['id']);
        $imie = mysql_escape_string($_REQUEST['imie']);
        $nazwisko = mysql_escape_string($_REQUEST['nazwisko']);
        $pesel = mysql_escape_string($_REQUEST['pesel']);
        $adres = mysql_escape_string($_REQUEST['adres']);
        $miasto = mysql_escape_string($_REQUEST['miasto']);
        $kod = mysql_escape_string($_REQUEST['kod']);
        $dl_prenum = mysql_escape_string($_REQUEST['dl_prenum']);
        $data_waznosci = mysql_escape_string($_REQUEST['data_waznosci']);
        
        $today = date('Y-m-d');
        $datapom1 = explode("-", $data_waznosci );
        $miesiac_waznosci = $datapom1[1] + $dl_prenum;
        $rok_waznosci = $datapom1[0];
        if($miesiac_waznosci > 12){
            $miesiac_waznosci = $miesiac_waznosci - 12;
            $rok_waznosci = $rok_waznosci+1;
           
        }
        
        $data_waznosci = $rok_waznosci."-".$miesiac_waznosci."-".$datapom1[2] ;
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
       $this->getDb()->update("prenumerator", $tablica, 'id_prenumerator = '.$id_prenum);
        //echo "to jest id prenum ".$id_prenum;
        $prenum = $this->getDb()->fetchAll("select * from prenumerator");
        $view = $this->getView();
        $view->assign("klienci", $prenum);
        $view->display("prenum.tpl");
    }

}//$n = $db->update('bugs', $data, 'bug_id = 2');
