<?php

$lista = array(
    array(
        "Nro" => 1,
        "ApellidosNombres" => "Juan Perez",
        "Edad" => 25,
        "Materia" => "SIS-256",
        "Nota" => 81
    ),
    array(
        "Nro" => 2,
        "ApellidosNombres" => "Ricardo Luna",
        "Edad" => 30,
        "Materia" => "SIS-258",
        "Nota" => 70
    ),
    array(
        "Nro" => 3,
        "ApellidosNombres" => "Teresa Tomasa",
        "Edad" => 26,
        "Materia" => "SIS-256",
        "Nota" => 84
    ),
    array(
        "Nro" => 4,
        "ApellidosNombres" => "Favian Umbre",
        "Edad" => 24,
        "Materia" => "SIS-258",
        "Nota" => 70
    ),  
);

$lista_json = json_encode($lista);

echo $lista_json;

?>