<?php

class ControllerCheckLogin extends Controller {

    public function action() {

        $login = $_REQUEST["login"];
        $haslo = $_REQUEST["haslo"];

        $login = pg_escape_string($login);
        $haslo = pg_escape_string($haslo);
        $test = md5("$haslo||$login");
        $wynik = $db->fetchAll("select * from pracownicy where login = ? and password_hasz = ? ", array($login, $test));

        if ($wynik) {
            echo "zalogowanie OK";
            $_SESSION['status'] = $wynik["0"]["status"];
            $_SESSION['login'] = $wynik["0"]["login"];
            var_dump($_SESSION['login']);
        } else {
            echo "nie takie haslo lub login";
        };

        //header("Location: index.php?action=ListPrenum");
    }

}
