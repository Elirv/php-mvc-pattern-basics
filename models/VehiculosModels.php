<?php

class Vehiculo_model{
    private $db;
    private $vehiculos;
    public function __construct(){
        $this -> db = Connect::connection();
        $this -> vehiculos = array();
    }
//load data from database
    public function get_vehiculos(){
        $sql = "SELECT id, placa, marca, modelo, anio, color FROM vehiculos";
        $result = $this -> db -> query($sql);
// output data of each row
        while ($row = $result -> fetch_assoc()){
            $this -> vehiculos [] = $row;
        }
        return $this -> vehiculos;
    }
}

function createEmployee($placa, $marca, $modelo, $anio, $color){
    $result = $this -> db -> query("INSERT INTO vehiculos(placa, marca, modelo, anio, color) VALUES ('$placa', '$marca', '$modelo', '$anio', '$color')");


}

?>