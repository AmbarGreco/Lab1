<?php
$foo = 10; // $foo es un interger
$bar = (boolean) $foo; // $bar es un booleano

echo "El valor de la variable bar es: $bar <br><br>";

$foo = (int)$bar; 
echo "El valor de la variable foo es: $foo";
?>