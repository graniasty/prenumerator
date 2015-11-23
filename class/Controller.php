<?php

class Controller {
    private $db;
    private $view;
    
    public function getDb() {
        return $this->db;
    }

    public function getView() {
        return $this->view;
    }

    public function setDb($db) {
        $this->db = $db;
    }

    public function setView($view) {
        $this->view = $view;
    }

    public function action() {
        
    }
}
