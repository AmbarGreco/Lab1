<form method="post">

    <!-- Primer número que va a ingresar el usuario -->
    Primer número:
    <input type="number" step="any" name="numero1">

    <br><br>

    <!-- Segundo número que va a ingresar el usuario -->
    Segundo número:
    <input type="number" step="any" name="numero2">

    <br><br>

    <!-- Selección de la operación que se quiere realizar -->
    <select name="operacion">

        <!-- Opción para sumar -->
        <option value="sumar">Sumar</option>

        <!-- Opción para restar -->
        <option value="restar">Restar</option>

        <!-- Opción para multiplicar -->
        <option value="multiplicar">Multiplicar</option>

        <!-- Opción para redondear -->
        <option value="redondear">Redondear</option>

    </select>

    <br><br>

    <!-- Botón para realizar la operación -->
    <input type="submit" value="Calcular">

</form>

<?php

// Verificamos si se ingresó el primer número
if (isset($_REQUEST["numero1"])) {

    // Guardamos el primer número
    $numero1 = $_REQUEST["numero1"];

    // Guardamos el segundo número
    $numero2 = $_REQUEST["numero2"];

    // Guardamos la operación seleccionada
    $operacion = $_REQUEST["operacion"];

    // Si la operación seleccionada es sumar
    if ($operacion == "sumar") {

        // Realizamos la suma
        $resultado = $numero1 + $numero2;

    }

    // Si la operación seleccionada es restar
    elseif ($operacion == "restar") {

        // Realizamos la resta
        $resultado = $numero1 - $numero2;

    }

    // Si la operación seleccionada es multiplicar
    elseif ($operacion == "multiplicar") {

        // Realizamos la multiplicación
        $resultado = $numero1 * $numero2;

    }

    // Si la operación seleccionada es redondear
    elseif ($operacion == "redondear") {

        // Redondeamos el primer número
        $resultado = round($numero1);

    }

    // Mostramos el resultado
    echo "<br>";
    echo "Resultado: " . $resultado;

}

?>