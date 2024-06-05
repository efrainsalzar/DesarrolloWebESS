<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div id="sub-menu" class="barra-lat-izquierda" >
        <div  class="btn-opciones btn-op-principal">Opciones</div>
    </div>
    <select name="mes" id="mes" onchange="obtenerCalendario()">
        <option value="1">Enero</option>
        <option value="2">Febrero</option>
        <option value="3">Marzo</option>
        <option value="4">Abril</option>
        <option value="5">Mayo</option>
        <option value="6">Junio</option>
        <option value="7">Julio</option>
        <option value="8">Agosto</option>
        <option value="9">Septiembre</option>
        <option value="10">Octubre</option>
        <option value="11">Noviembre</option>
        <option value="12">Diciembre</option>
    </select>
    <select name="anio" id="anio" onchange="obtenerCalendario()">
        <?php
        for($i=1975 ; $i <= 2023; $i++){
        ?>
            <option value="<?php echo $i ?>"><?php echo $i ?></option>
        <?php
        }
        ?>
    
    </select>
</body>
</html>