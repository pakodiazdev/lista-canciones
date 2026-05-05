<?php

include_once "funciones/menu.php";
include_once "funciones/listar-cancion.php";
include_once "funciones/obtenerCancion.php";
include_once "funciones/eliminar-cancion.php";
include_once "funciones/agregar-cancion.php";


$salir = false;
$canciones = obtenerCanciones();
while($salir == false) {
    menu();
    $opcionSeleccionada = readline();
    switch($opcionSeleccionada) {
        case "1":
            agregarCancion($canciones);
            break;
        case "2":
            listarCanciones($canciones);
            break;
        case "3":
            eliminarCancion();
            break;
        case "4":
            $salir = true;
            break;
        default:
            echo "Seleciona una opicion valida\n";
    }

}

echo "Adios!";


