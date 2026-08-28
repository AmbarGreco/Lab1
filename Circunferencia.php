<h1>Área de una circunferencia</h1>

<form method="post">

    Ingrese el radio:
    <input type="number" step="any" name="radio">

    <br><br>

    <input type="submit" value="Calcular">

</form>

<?php

if (isset($_REQUEST["radio"])) {

    $radio = $_REQUEST["radio"];

    $pi = 3.1416;

    $area = $pi * $radio * $radio;

    echo "<br>";
    echo "El área de la circunferencia es: " . $area;

}

?>

</body>
</html>