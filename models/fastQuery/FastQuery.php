<?php
$pathName = dirname(__DIR__,2);
require_once($pathName."\\config\\modeloBase.php");

class FastQuery extends ModelBase
{
    public function __construct()
    {
       parent::__construct();
    }

    public function getAll($tabla){
    	$consulta = "SELECT * FROM $tabla";
        $query = $this->db->query($consulta);
        return $query;
    }
    
    public function getAllWhere($tabla,$where){
        $consulta = "SELECT * FROM $tabla $where";
        $query = $this->db->query($consulta);
        return $query;
    }
    
}
