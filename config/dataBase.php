<?php

class Conectar{

    public static funtion conexion(){

        $conexion = new mysql ("localhost", "root", "", "cursoPHP/php-mvc-pattern-basics/php-mvc-pattern-basics");
        return $conexion;

    }
}









?>