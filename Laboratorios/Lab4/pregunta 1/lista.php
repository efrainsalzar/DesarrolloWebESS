<?php

$estudiantes = [
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
];

// Function to add a new student
function agregarEstudiante($nuevoEstudiante) {
    global $estudiantes;
    $nuevoEstudiante['Nro'] = count($estudiantes) + 1;
    $estudiantes[] = $nuevoEstudiante;
}

// Check for the presence of specific POST data to add a new student
if (!empty($_POST['ApellidosNombres']) && !empty($_POST['Edad']) && !empty($_POST['Materia']) && isset($_POST['Nota'])) {
    $nuevoEstudiante = $_POST;
    agregarEstudiante($nuevoEstudiante);
    echo json_encode($estudiantes);
} else {
    // Default action is to return the list of students
    echo json_encode($estudiantes);
}
?>
