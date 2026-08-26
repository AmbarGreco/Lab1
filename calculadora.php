<form method="post">

    Primer número:
    <input type="number" step="any" name="numero1">

    <br><br>

    Segundo número:
    <input type="number" step="any" name="numero2">

    <br><br>

    <select name="operacion">
        <option value="sumar">Sumar</option>
        <option value="restar">Restar</option>
        <option value="multiplicar">Multiplicar</option>
        <option value="redondear">Redondear</option>
    </select>

    <br><br>

    <input type="submit" value="Calcular">

</form>

<?php

if (isset($_REQUEST["numero1"])) {

    $numero1 = $_REQUEST["numero1"];
    $numero2 = $_REQUEST["numero2"];
    $operacion = $_REQUEST["operacion"];

    if ($operacion == "sumar") {

        $resultado = $numero1 + $numero2;

    }

    elseif ($operacion == "restar") {

        $resultado = $numero1 - $numero2;

    }

    elseif ($operacion == "multiplicar") {

        $resultado = $numero1 * $numero2;

    }

    elseif ($operacion == "redondear") {

        $resultado = round($numero1);

    }

    echo "<br>";
    echo "Resultado: " . $resultado;

}

?>