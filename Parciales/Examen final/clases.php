<?php


class Alumno {
    public $CU;
    public $nombres;
    public $apellidos;

    public function __construct($CU, $nombres, $apellidos) {
        $this->CU = $CU;
        $this->nombres = $nombres;
        $this->apellidos = $apellidos;
    }
}


class ListaAlumnos {
    private $lista;

    public function __construct() {
        $this->lista = array();
    }

    public function insertarAlumno($alumno) {
        $this->lista[] = $alumno;
    }

    public function eliminarAlumno($cu) {
        foreach ($this->lista as $key => $alumno) {
            if ($alumno->CU == $cu) {
                unset($this->lista[$key]);
                return true;
            }
        }
        return false; 
    }

    public function mostrarLista() {
        if (empty($this->lista)) {
            echo "<p>No hay alumnos en la lista.</p>";
        } else {
            echo "<table border='1'>
                    <tr>
                        <th>CU</th>
                        <th>Nombres</th>
                        <th>Apellidos</th>
                        <th></th>
                    </tr>";
            foreach ($this->lista as $alumno) {
                echo "<tr>
                        <td>{$alumno->CU}</td>
                        <td>{$alumno->nombres}</td>
                        <td>{$alumno->apellidos}</td>
                        <td>
                            <form action='' method='post'>
                                <input type='hidden' name='cu' value='{$alumno->CU}'>
                                <input type='submit' name='submit_delete' value='Eliminar'>
                            </form>
                        </td>
                      </tr>";
            }
            echo "</table>";
        }
    }
}

?>
