<?php

// File path to the JSON file
$filename = 'estudiantes.json';

// Function to load students from the JSON file
function cargarEstudiantes() {
    global $filename;
    if (file_exists($filename)) {
        $data = file_get_contents($filename);
        return json_decode($data, true);
    }
    return [];
}

// Function to save students to the JSON file
function guardarEstudiantes($estudiantes) {
    global $filename;
    $data = json_encode($estudiantes, JSON_PRETTY_PRINT);
    file_put_contents($filename, $data);
}

// Load students from the file
$estudiantes = cargarEstudiantes();

// Function to add a new student
function agregarEstudiante($nuevoEstudiante) {
    global $estudiantes;
    $nuevoEstudiante['Nro'] = count($estudiantes) + 1;
    $estudiantes[] = $nuevoEstudiante;
    guardarEstudiantes($estudiantes);
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
