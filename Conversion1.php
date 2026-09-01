<!DOCTYPE html> 
<html lang="es"> 
 
<head> 

    <!-- Permite utilizar caracteres especiales como á, é, í, ó y ú -->
    <meta charset="UTF-8"> 

    <!-- Título que aparece en la pestaña del navegador -->
    <title>Conversor de pulgadas a centímetros</title> 
 
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
            padding: 35px; 
            border-radius: 15px; 
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2); 
            text-align: center; 
            width: 350px; 
        } 
 
        /* Diseño del título */
        h1 { 
            color: #333; 
            font-size: 25px; 
        } 
 
        /* Diseño del campo para ingresar las pulgadas */
        input[type="number"] { 
            width: 90%; 
            padding: 10px; 
            margin-top: 10px; 
            border: 1px solid #ccc; 
            border-radius: 8px; 
            font-size: 16px; 
        } 
 
        /* Diseño del botón Convertir */
        input[type="submit"] { 
            background-color: #007bff; 
            color: white; 
            border: none; 
            padding: 12px 25px; 
            border-radius: 8px; 
            font-size: 16px; 
            cursor: pointer; 
            margin-top: 20px; 
        } 
 
        /* Cambia el color del botón cuando se coloca el mouse encima */
        input[type="submit"]:hover { 
            background-color: #0056b3; 
        } 
 
        /* Diseño del cuadro donde se muestra el resultado */
        .resultado { 
            background-color: #e9f5ff; 
            margin-top: 25px; 
            padding: 15px; 
            border-radius: 10px; 
            font-size: 18px; 
        } 
    </style> 
 
</head> 
 
<body> 
 
<!-- Contenedor principal del programa -->
<div class="contenedor"> 
 
    <!-- Título que aparece en la página -->
    <h1>Pulgadas a centímetros</h1> 
 
    <!-- Formulario para ingresar las pulgadas -->
    <form method="post"> 
 
        Ingrese las pulgadas: 
 
        <br> 
 
        <!-- Campo donde el usuario escribe la cantidad de pulgadas -->
        <input type="number" step="any" name="pulgadas" required> 
 
        <br> 
 
        <!-- Botón para realizar la conversión -->
        <input type="submit" value="Convertir"> 
 
    </form> 
 
    <?php 
 
    // Verificamos si se ingresó un valor de pulgadas
    if (isset($_REQUEST["pulgadas"])) { 
 
        // Guardamos el valor ingresado en una variable
        $pulgadas = $_REQUEST["pulgadas"]; 
 
        // Convertimos las pulgadas a centímetros
        // Una pulgada equivale a 2.54 centímetros
        $centimetros = $pulgadas * 2.54; 
 
        // Creamos el cuadro para mostrar el resultado
        echo "<div class='resultado'>"; 

        // Mostramos el resultado de la conversión
        echo "Resultado: " . $centimetros . " centímetros"; 

        // Cerramos el cuadro del resultado
        echo "</div>"; 
 
    } 
 
    ?> 
 
</div> 
 
</body> 
 
</html>