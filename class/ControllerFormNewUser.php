<?php

class ControllerFormNewUser extends Controller {

    function action() {
        $view = $this->getView();
        $view->display("FormNewUser.tpl");
    }
}
