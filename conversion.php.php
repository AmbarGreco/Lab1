<form method="post">

    Ingrese las pulgadas:
    <input type="number" name="pulgadas">

    <input type="submit" value="Convertir">

</form>

<?php

if (isset($_REQUEST["pulgadas"])) {

    $pulgadas = $_REQUEST["pulgadas"];

    $centimetros = $pulgadas * 2.54;

    echo "<br>";
    echo "Resultado: " . $centimetros . " centímetros";

}

?>
