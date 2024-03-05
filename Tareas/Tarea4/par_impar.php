<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $numeros = range(1,20); //array con nums del 1-20
        $par = array();
        $impar = array();
            // array a rrecorer as valor actual en esa iteracion
        foreach($numeros as $numero){
            if($numero % 2 == 0){
                $par[] = $numero;
            }
            else{$impar[] = $numero;}
        }
        /*print_r($par); esta es una marenra*/
        echo "Numeros Pares: [". implode(', ',$par)."]<br>";
        echo "Numeros Impares: [".implode(', ',$impar)."]";

    ?>
</body>
</html>