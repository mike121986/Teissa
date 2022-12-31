<?php

require_once(__DIR__."\SetGetProducto.php");
require_once(__DIR__."\Showproducto.php");

class VerifIdProductoByNameModels extends SetGetProducto implements Showproducto
{
    public function __construct($nameproducto)
    {
        parent::__construct();
        $this->nombre = $nameproducto;
    }

    public function query($datos){
        $queri = "SELECT * FROM producto pr WHERE  pr.nombreProducto LIKE '%$datos%' ";
        $name = $this->db->query($queri);
        return $name;
    }

    public function show(){
        $producto = $this->query($this->nombre);
        $datos =  array();
        if($producto->num_rows > 0){
           while($prod = $producto->fetch_object()){
             $data = array(
                "id"=>$prod->idProducto,
                "name"=>$prod->nombreProducto,
                "descrip" => $prod->DescripcionProducto
             );
             array_push($datos,$data);
           }
        }else{
            $datos =  array(array("id" => "ERROR"));
        }
        
        return $datos;

    }
    
}
