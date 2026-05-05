<?php


function agregarCancion(&$canciones) {
    echo "¿Cual es el titulo de la canción?";
    $titulo = readline();
    
    echo "¿Quien es el artista de la canción?";
    $artista = readline();

    echo "¿De que album es?";
    $album = readline();
    echo "¿es de tus faboritas si/no?";
    $favorita = readline();

    if($favorita == 'si') {
        $favorita = true;
    } else {
        $favorita = false;
    }

    $cancion = [
        "ID" => count($canciones) + 1,
        "Titulo" => $titulo,
        "Artista" => $artista ,
        "Album" => $album,
        "Favorita" => $favorita
    ];

    $canciones[] = $cancion;
}