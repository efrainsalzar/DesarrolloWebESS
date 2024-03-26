
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $numpalabra = $_POST["numpalabra"];
        ?>
        <form action="ordenar.php" method="POST">
            <input type="hidden" name="numpalabra" value="<?php$palabra?>">
            <h2>Ingrese palabras:<?php $numpalabra ?></h2>
            <?php
            for($i = 1; $i<=$numpalabra; $i++){
                ?>
                <input type="text" name="palabra".$i><br>
                <?php
            }
            
            ?>
            <input type="submit" value="Ordenar">
        </form>
        <?php


    }
    else{
        header("Location: form.html");
        exit;
    }



?>
</body>
</html>