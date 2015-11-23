<?php

class ControllerFormNewPrenum extends Controller {

    function action() {
        $view = $this->getView();
        $view->display("FormNewPrenum.tpl");
    }
}
