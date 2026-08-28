<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Área y perímetro de un círculo</title>

    <style>

        body {
            font-family: Arial, sans-serif;
            background-color: #f0f2f5;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .contenedor {
            background-color: white;
            padding: 40px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h1 {
            color: #333;
            font-size: 26px;
            margin-bottom: 30px;
        }

        label {
            font-size: 18px;
            color: #555;
        }

        input[type="number"] {
            width: 90%;
            padding: 10px;
            margin-top: 10px;
            border: 1px solid #ccc;
            border-radius: 8px;
            font-size: 16px;
        }

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

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

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

<div class="contenedor">

    <h1>Área y perímetro de un círculo</h1>

    <form method="post">

        <label>Ingrese el radio:</label>

        <br>

        <input type="number" step="any" name="radio" required>

        <br><br>

        <input type="submit" value="Calcular">

    </form>

    <?php

    if (isset($_REQUEST["radio"])) {

        $radio = $_REQUEST["radio"];

        $pi = 3.1416;

        $area = $pi * $radio * $radio;

        $perimetro = 2 * $pi * $radio;

        echo "<div class='resultado'>";

        echo "El área del círculo es: " . $area;

        echo "<br>";

        echo "El perímetro del círculo es: " . $perimetro;

        echo "</div>";
    }

    ?>

</div>

</body>

</html>