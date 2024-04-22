<?php

class PalabraCD {
    private $palabra;
    private $color;
    private $color_fondo;

    // Constructor para inicializar las propiedades
    public function __construct($palabra, $color = null, $color_fondo = null) {
        $this->palabra = $palabra;
        $this->color = $color;
        $this->color_fondo = $color_fondo;
    }

    public function cuadrado() {
        echo "cuadrado";
        $cantidad = 0;
        $arrayPalabra = [];

        for ($i = 0; isset($this->palabra[$i]); $i++) {
                $cantidad = $cantidad+1;
        }
        //echo "cantidad".$cantidad;

        for ($i = 0; $i < $cantidad; $i++) {
            $arrayPalabra[] = $this->palabra[$i];
        }
        ?>
        <table border='1'>
            <tr>
        <!-- horizontalmente -->
            <?php
            for ($i = 0; $i < $cantidad; $i++) {
            ?>
            <td><?php echo $arrayPalabra[$i]; ?></td>
            <?php
            }
            ?>
            </tr>
    <!-- vertical -->
        <?php
        for ($i = 1; $i < $cantidad; $i++) {
        ?>
        <tr>
            <td><?php echo $arrayPalabra[$i]; ?></td>
        </tr>
        <?php
        }
        ?>
        </table>

        <?php
    }
    
    public function diagonal(){
        echo "diagonal";
        $cantidad = 0;
        $arrayPalabra = [];

        for ($i = 0; isset($this->palabra[$i]); $i++) {
                $cantidad = $cantidad+1;
        }
        //echo "cantidad".$cantidad;

        for ($i = 0; $i < $cantidad; $i++) {
            $arrayPalabra[] = $this->palabra[$i];
        }
        ?>
        <table>
        <table>
        <?php
        // Imprimir la palabra en diagonal en la tabla
        for ($i = 0; $i < $cantidad; $i++) {
            echo "<tr>";
            for ($j = 0; $j < $cantidad; $j++) {
                if ($i == $j) {
                    echo "<td>{$arrayPalabra[$i]}</td>";
                } else {
                    echo "<td></td>";
                }
            }
            echo "</tr>";
        }
        ?>
    </table>
        </table>
        <?php
    }
}   


?>
