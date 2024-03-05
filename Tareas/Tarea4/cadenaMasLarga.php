<!--Crea un programa en php que permita de una cadena determinada  
de caracteres que contenga palabras separadas por espacios, 
el programa debe  imprimir la palabra mas larga --> 
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $cadena = "Esta es un ejemplo con palabras de diferente tamaño";
        $palabras = explode(' ',$cadena);
        
        $logitud = 0;
        $pMasLarga = '';

        foreach($palabras as $palabra){
            // Eliminar posibles caracteres especiales o espacios al inicio y al final de la palabra
            $palabra = trim($palabra); // elimina esta funcion para aceptar los cararcter especiales
            // Obtener la longitud de la palabra actual
            $longitudP = strlen($palabra);
            
            if($longitudP > $logitud){
                $logitud = $longitudP;
                $pMasLarga = $palabra;
            }
        }
        echo "La palabra mas larga es: $pMasLarga";
    ?>
</body>
</html>