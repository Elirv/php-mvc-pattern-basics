<?php

function cargarControlador($controlador){ //nombre del controlador
    //nomre de la clase                    //de...class vehiculosCONTROLLER
    $nombreControlador = $controlador . "Controller";
    //nombre del archivo
    $archivoControlador = 'controllers/'.$controlador.'.php';
                         //carpeta controllers + nombre del controlador
    if(!is_file($archivoControlador)){

        $archivoControlador = 'controllers/' . CONTROLADOR_PRINCIPAL . '.php';
        
    }
    //echo $archivoControlador;
    require_once $archivoControlador;
    $control = new $nombreControlador();
    return $control;
}
function cargarAccion($controller, $accion){

    if(isset($accion) && method_exists($controller, $accion)){
        //obketo -> funion
        $controller -> $accion();

    }else{
        $controller -> ACCION_PRINCIPAL();
    }

}


?>