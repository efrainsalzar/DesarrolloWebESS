<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Editar Libro</title>
</head>
<body>
    <?php
    include("conexion.php");
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $sql = "SELECT 
                    l.id, 
                    l.imagen, 
                    l.titulo, 
                    l.autor, 
                    l.ideditorial, 
                    e.editorial,  
                    l.anio 
                FROM 
                    libros l
                LEFT JOIN 
                    editoriales e ON l.ideditorial = e.id
                WHERE 
                    l.id = $id";
    
        $result = $con->query($sql);
        $data = $result->fetch_assoc();
    } else {
        $id = "";
    }

    // Obtener editoriales para el select
    $sqlEditoriales = "SELECT id, editorial FROM editoriales";
    $resultEditoriales = $con->query($sqlEditoriales);
    ?>
    <input type="hidden" id="id" value="<?php echo $id ?>">
    <label for="titulo">Titulo</label>
    <input type="text" id="titulo" value="<?php echo $data['titulo'] ?>"><br>
    <label for="autor">Autor</label>
    <input type="text" id="autor" value="<?php echo $data['autor'] ?>"><br>
    <label for="editorial">Editorial</label>
    <select id="editorial">
        <option value="">Seleccionar Editorial</option>
        <?php while($row = $resultEditoriales->fetch_assoc()) : ?>
            <option value="<?php echo $row['id']; ?>" <?php if($row['id'] == $data['ideditorial']) echo "selected"; ?>>
                <?php echo $row['editorial']; ?>
            </option>
        <?php endwhile; ?>
    </select><br>
    <label for="anio">Año</label>
    <input type="number" id="anio" value="<?php echo $data['anio'] ?>"><br>
    <button id="binsertar" onclick="editarDatos()">Editar</button>
</body>
</html>
