<?php
function primo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;
}
$cantidad = $_POST['cantidad'];
$primos = [];
$i = 2;
while (count($primos) < $cantidad) {
    if (primo($i)) {
        $primos[] = $i;
    }
    $i++;
}
echo "<h3>Los primeros $cantidad números primos:</h3>";
foreach ($primos as $primo) {
    echo "<p>$primo</p><br>";
}
?>
