<?php

class VehiculosController{
    public function index(){
        require_once("models/VehiculosModels.php");
        $vehiculos = new Vehiculo_model();
        $data ["titulos"] = "Vehiculos";
        $data ["vehiculos"] = $vehiculos -> get_vehiculos();

        require_once("views/vehiculos/vehiculos.php");

    }
    public function nueva(){
        
        $data["titulo"] = "Vehiculos";
        require_once("views/vehiculos/vehiculos_nuevo.php");
    }
}
?>