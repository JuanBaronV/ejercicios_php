<?php

// Llamamos a la función
include "ejercicio01.php"; // se ejecuta y continua si no existe el archivo
// con el require, si el archivo no existe, se para la ejecución
hola_mundo();
$c = suma (10,20);
echo "C: $c";

imprimir_tabla_multiplicar(rand(1,10));
?>