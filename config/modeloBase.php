<?php
require_once(__DIR__.'\\ConectDb.php');
//require_once 'ConectDb.php';
class ModelBase{
    public $db;
    
    public function __construct() {
        $this->db = ConectDb::connect();
        
    }

}