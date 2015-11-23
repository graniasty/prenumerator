<?php

class ControllerListUser extends Controller {

    function action() {
        $prenum = $this->getDb()->fetchAll("select * from uzytkownicy");
        $view = $this->getView();
        $view->assign("klienci", $prenum);
        $view->display("users.tpl");
    }
}
