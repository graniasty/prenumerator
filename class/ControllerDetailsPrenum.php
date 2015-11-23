<?php

class ControllerDetailsPrenum extends Controller {
    public function action() {
        $klient = $this->getDb()
                ->fetchRow("select * from prenumerator where id = ?",
                        array($_REQUEST["id"])
        );
        $view = $this->getView();
        $view->assign("klient", $klient);
        $view->display("DetailsPrenum.tpl");        
        
    }
}
