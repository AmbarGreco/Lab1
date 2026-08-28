<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <title>Conversor de pulgadas a centímetros</title>

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
            padding: 35px;
            border-radius: 15px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
            text-align: center;
            width: 350px;
        }

        h1 {
            color: #333;
            font-size: 25px;
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
            margin-top: 20px;
        }

        input[type="submit"]:hover {
            background-color: #0056b3;
        }

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

<div class="contenedor">

    <h1>Pulgadas a centímetros</h1>

    <form method="post">

        Ingrese las pulgadas:

        <br>

        <input type="number" step="any" name="pulgadas" required>

        <br>

        <input type="submit" value="Convertir">

    </form>

    <?php

    if (isset($_REQUEST["pulgadas"])) {

        $pulgadas = $_REQUEST["pulgadas"];

        $centimetros = $pulgadas * 2.54;

        echo "<div class='resultado'>";
        echo "Resultado: " . $centimetros . " centímetros";
        echo "</div>";

    }

    ?>

</div>

</body>

</html>