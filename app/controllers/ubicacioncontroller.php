<?php 

namespace App\Controllers;


class ubicacionController{


    public function getNomEstado($idestado, $abreviado=false){
        if($abreviado==true){
            return "Ver.";
        }else{
            return "Veracruz";
        }
    }

    public function getNomMunicipio($idmunicipio){
        return "Úrsulo Galván";
    }

    public function getNomLocalidad($idlocalidad){
        return "Chachalacas";
    }
}

?>