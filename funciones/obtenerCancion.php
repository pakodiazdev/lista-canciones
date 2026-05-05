<?php

function obtenerCanciones() {
    $canciones = [
        [
            "ID" => 1,
            "Titulo" => "Shape of You",
            "Artista" => "Ed Sheeran",
            "Album" => "÷ (Divide)",
            "Favorita" => true
        ],
        [
            "ID" => 2,
            "Titulo" => "Blinding Lights",
            "Artista" => "The Weeknd",
            "Album" => "After Hours",
            "Favorita" => false
        ],
        [
            "ID" => 3,
            "Titulo" => "Levitating",
            "Artista" => "Dua Lipa",
            "Album" => "Future Nostalgia",
            "Favorita" => true
        ],
        [
            "ID" => 4,
            "Titulo" => "Bad Guy",
            "Artista" => "Billie Eilish",
            "Album" => "When We All Fall Asleep, Where Do We Go?",
            "Favorita" => false
        ]
    ];

    return $canciones;
}