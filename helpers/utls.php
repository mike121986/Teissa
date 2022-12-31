<?php

class Utls{

    public static function deleteSession($name){
        if(isset($_SESSION[$name])){
                $_SESSION[$name] = null;
                unset($_SESSION[$name]);
        }
        return $name;
    }   

    public static function nameMonth($numberMonth){
        date_default_timezone_set("America/Mexico_City");

        $mes = ["Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre"][$numberMonth - 1];

        return $mes;
    }

    public static function namebreadcum($linkGet){
        $action = $linkGet ["action"];
        $retorno ='';
        switch ($linkGet["controller"]) {
            case 'Pedido':
                if($action == 'make'){
                    $retorno = 'HACER PEDIDO';
                }
           
           default:
               # code...
               break;
       }

       return $retorno;
    }

}
