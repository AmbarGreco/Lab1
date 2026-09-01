<!DOCTYPE html> 
<html lang="es"> 

<head> 

    <!-- Configuración para utilizar caracteres especiales -->
    <meta charset="UTF-8"> 

    <!-- Título que aparece en la pestaña del navegador -->
    <title>Área y perímetro de un círculo</title> 
 
    <style> 

        /* Diseño general de la página */
        body { 
            font-family: Arial, sans-serif; 
            background-color: #f0f2f5; 
            display: flex; 
            justify-content: center; 
            align-items: center; 
            height: 100vh; 
            margin: 0; 
        } 
 
        /* Diseño del cuadro principal */
        .contenedor { 
            background-color: white; 
            padding: 40px; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
            text-align: center; 
            width: 350px; 
        } 
 
        /* Diseño del título */
        h1 { 
            color: #333; 
            font-size: 26px; 
            margin-bottom: 30px; 
        } 
 
        /* Diseño del texto que indica ingresar el radio */
        label { 
            font-size: 18px; 
            color: #555; 
        } 
 
        /* Diseño del campo donde se escribe el radio */
        input[type="number"] { 
            width: 90%; 
            padding: 10px; 
            margin-top: 10px; 
            border: 1px solid #ccc; 
            border-radius: 8px; 
            font-size: 16px; 
        } 
 
        /* Diseño del botón de calcular */
        input[type="submit"] { 
            background-color: #007bff; 
            color: white; 
            border: none; 
            padding: 12px 25px; 
            border-radius: 8px; 
            font-size: 16px; 
            cursor: pointer; 
            margin-top: 15px; 
        } 
 
        /* Cambia el color del botón cuando colocamos el mouse encima */
        input[type="submit"]:hover { 
            background-color: #0056b3; 
        } 
 
        /* Diseño del cuadro donde aparecen los resultados */
        .resultado { 
            background-color: #e9f5ff; 
            margin-top: 25px; 
            padding: 15px; 
            border-radius: 10px; 
            color: #333; 
            font-size: 17px; 
            line-height: 1.8; 
        } 
 
    </style> 
 
</head> 
 
<body> 
 
<!-- Contenedor principal del programa -->
<div class="contenedor"> 
 
    <!-- Título que aparece en la página -->
    <h1>Área y perímetro de un círculo</h1> 
 
    <!-- Formulario para ingresar el radio -->
    <form method="post"> 
 
        <label>Ingrese el radio:</label> 
 
        <br> 
 
        <!-- Campo donde el usuario escribe el radio -->
        <input type="number" step="any" name="radio" required> 
 
        <br><br> 
 
        <!-- Botón para realizar el cálculo -->
        <input type="submit" value="Calcular"> 
 
    </form> 
 
    <?php 
 
    // Verificamos si el usuario ingresó un radio
    if (isset($_REQUEST["radio"])) { 
 
        // Guardamos el radio ingresado en una variable
        $radio = $_REQUEST["radio"]; 
 
        // Valor de PI utilizado para realizar los cálculos
        $pi = 3.1416; 
 
        // Calculamos el área del círculo
        $area = $pi * $radio * $radio; 
 
        // Calculamos el perímetro del círculo
        $perimetro = 2 * $pi * $radio; 
 
        // Creamos el cuadro donde se mostrarán los resultados
        echo "<div class='resultado'>"; 
 
        // Mostramos el resultado del área
        echo "El área del círculo es: " . $area; 
 
        echo "<br>"; 
 
        // Mostramos el resultado del perímetro
        echo "El perímetro del círculo es: " . $perimetro; 
 
        // Cerramos el cuadro de resultados
        echo "</div>"; 
    } 
 
    ?> 
 
</div> 
 
</body> 
 
</html>