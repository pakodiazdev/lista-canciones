<?php 
include_once "limpiarPantalla.php";

function listarCanciones($canciones) {
    limpiarPantalla();
    echo "============= LISTA DE CANCIONES =============\n";
    for($i=0; $i < count($canciones); $i++) {
        echo "Id: " . $canciones[$i]["ID"] . "\n";
        echo "Titulo: " . $canciones[$i]["Titulo"] . "\n";
        echo "Artista: " . $canciones[$i]["Artista"] . "\n";
        echo "Album: " . $canciones[$i]["Album"] . "\n";
        echo "Favorita: " . $canciones[$i]["Favorita"] . "\n";
        echo "------------------ \n";
    }
    echo "\nEnter para continuar";
    readline();
}