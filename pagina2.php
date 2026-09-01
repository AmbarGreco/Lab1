<?PHP

// Guardamos el nombre que viene del formulario
$Nombre = $_REQUEST['nombre'];

// Mostramos el nombre ingresado
echo "El nombre es: ".$Nombre."<br>";

// Guardamos la edad que viene del formulario
$Edad = $_POST["edad"];

// Verificamos si la edad existe y si es mayor de 18
if (isset($Edad) and $Edad >18){

    // Acciones
    echo "usted puede votar en las próximas elecciones 2028";

}else echo "Usted no es mayor de edad";

?>