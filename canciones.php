<?php

include_once "funciones/menu.php";
include_once "funciones/registrar-pelicula.php";
include_once "funciones/listar-cancion.php";
include_once "funciones/obtenerCancion.php";
include_once "funciones/eliminar-cancion.php";


$salir = false;
while($salir == false) {
    menu();
    $opcionSeleccionada = readline();
    switch($opcionSeleccionada) {
        case "1":
            break;
        case "2":
            break;
        case "3":
            break;
        case "4":
            $salir = true;
            break;
        default:
            echo "Seleciona una opicion valida";
    }

}

echo "Adios!";


