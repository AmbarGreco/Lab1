<html>

<head>

    <!-- Título de la página -->
    <title>Formulario de entrada del dato</title>

</head>

<body>

    <!-- Formulario que enviará los datos a pagina2.php -->
    <form method="post" action="pagina2.php">

        Ingrese su nombre:

        <!-- Campo para ingresar el nombre -->
        <input type="text" name="nombre" id="nombre">

        <br>
        <br>

        Ingrese su Edad:

        <!-- Campo para ingresar la edad -->
        <input type="text" name="edad" id="edad">

        <br>
        <br>

        <!-- Botón para enviar los datos -->
        <input type="submit" value="confirmar">

    </form>

</body>

</html>