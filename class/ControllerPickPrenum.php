<?php

class ControllerPickPrenum extends Controller {

    function action() {
        $id_prenum  = $_REQUEST['id'];
        $prenum = $this->getDb()->fetchAll("select * from prenumerator where id_prenumerator = $id_prenum ");
        $view = $this->getView();
        $view->assign("klienci", $prenum);
               var_dump($prenum);

        $view->display("FormEditPrenum.tpl");
    }
}
