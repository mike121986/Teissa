<?php

require_once(__DIR__."\SetGetProducto.php");
require_once(__DIR__."\Showproducto.php");

class VerifIdProducto extends SetGetProducto implements Showproducto
{
    public function __construct($idproducto)
    {
        parent::__construct();
        $this->id = $idproducto;
    }

    public function query($datos){
        $queri = "SELECT * FROM producto pr WHERE pr.idProducto = ".$datos;
        $datos = $this->db->query($queri);
        return $datos;
    }

    public function show(){
        $producto = $this->query($this->id);
        $datos =  "error: sin Datos";
        if($producto->num_rows > 0){
            $datos =  $producto->fetch_object();
        }
        
        return $datos;

    }
    
}


