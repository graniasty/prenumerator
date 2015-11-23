<?php

class ControllerListPrenum extends Controller {

    function action() {
        
        $prenum = $this->getDb()->fetchAll("select * from prenumerator  ");
        $view = $this->getView();
        $view->assign("klienci", $prenum);
        $view->display("prenum.tpl");
    }
}
