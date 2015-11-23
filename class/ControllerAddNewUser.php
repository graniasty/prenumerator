<?php
require_once "Controller.php";

class ControllerAddNewUser extends Controller {

    function action() {
        $haslowa = $_REQUEST['haslo'];
        $haslowa2 = $_REQUEST['login'];
        $haslo_hasz = md5("$haslowa||$haslowa2");
        $tablica = array(
            "login" => $_REQUEST["login"],
            "nazwisko_uzyt" => $_REQUEST["nazwisko"],
            "imie_uzyt" => $_REQUEST["imie"],
            "haslo_hasz" => $haslo_hasz,
            "kategoria_uzyt" => $_REQUEST["kategoria_uzyt"],
            "sol" => $_REQUEST['login'],
            "status_uzyt" => 1
        );
        //var_dump($tablica);
        $this->getDb()->insert("uzytkownicy", $tablica);

        $prenum = $this->getDb()->fetchAll("select * from uzytkownicy");
        $view = $this->getView();
        $view->assign("klienci", $prenum);
        $view->display("users.tpl");
    }

}
