<?php
include("conexion.php");

$sql = "SELECT * FROM personas";
$result = $con->query($sql);
$datos = array();

if ($result) {
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $datos[] = $row;
        }
    }
    echo json_encode($datos, JSON_UNESCAPED_UNICODE);
} else {
    echo json_encode(array("error" => $con->error));
}

mysqli_close($con);
?>
