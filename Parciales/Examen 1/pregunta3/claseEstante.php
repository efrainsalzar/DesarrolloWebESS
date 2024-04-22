<?php

class Estante {
    private $fila1;
    private $fila2;

    public function __construct() {
        $this->fila1 = array();
        $this->fila2 = array();
    }

    public function insertarFila1($nombre) {
        array_push($this->fila1, $nombre);
    }
    
    public function insertarFila2($nombre){
        array_push($this->fila2, $nombre);
    }

    public function mostrarArmario() {
        echo "<table border='1'>";
        echo "<tr><th>Fila 1</th></tr>";
        echo "<tr>";
        foreach ($this->fila1 as $nombre) {
            echo "<td>$nombre</td>";
        }
        echo "</tr>";
        echo "<tr><th>Fila 2</th></tr>";
        echo "<tr>";
        foreach ($this->fila2 as $nombre) {
            echo "<td>$nombre</td>";
        }
        echo "</tr>";
        echo "</table>";
    }
}   


?>
