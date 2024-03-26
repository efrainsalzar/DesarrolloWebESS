<?php
    include ("funcion.php");

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numPalabras = $_POST["numpalabra"];
        $palabras = [];

        for($i = 1; $i<=$numPalabras; $i++){
            $palabras = $_POST["palabra".$i];
        }
        $ordenar = ordenarPalabra($palabras);
        ?>
        <h2>Palabras Ordenadas:</h2>
        <ul>
            <?php
            foreach($ordenar as $palabr){
                ?>
                <li><?php$palabr?></li>
                <?php
            }
            ?>
        </ul>
        <?php

    }
    else{
        header("Location: form.html");
        exit;
    }    


?>