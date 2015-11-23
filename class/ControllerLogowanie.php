<?php

class ControllerLogowanie extends Controller {

    public function action() {
        $view = $this->getView();
        $view->display("logowanie.tpl");
    }

}
