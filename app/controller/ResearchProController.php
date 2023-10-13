<?php

spl_autoload_register();
require_once 'app/model/DBConnect.php';

class ResearchProController {
    private $db;

    public function __construct() {
        $this->db = new DBConnect();
        require 'tpl/index.html';
    }

    function getDB(){
        return $this->db;
    }
}
?>