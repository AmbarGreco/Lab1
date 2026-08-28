<body>

<h1>Área y perímetro de un círculo</h1>

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

    $perimetro = 2 * $pi * $radio;

    echo "<br>";
    echo "El área del círculo es: " . $area;

    echo "<br>";
    echo "El perímetro del círculo es: " . $perimetro;

}

?>

</body>
</html>