<?php

// Definimos una constante
define("NUM_ELEMENTS", 10);

// Definimos un array

$numeros = array();

// Inicializamos un array con valores aleatorios
for ($i = 0 ; $i <= NUM_ELEMENTS ; $i++) { 
    $numeros[$i] = rand(1, 30);
}

// Imprimimos el array con un bucle for
echo "<h1> Array con Bucle FOR </h1>";
echo "<ul>";   
for ($i=0; $i < NUM_ELEMENTS ; $i++) { 
    echo "<li>$numeros[$i]</li>";
}   
echo "</ul>";

// Imprimimos el array con un bucle foreach
echo "<h1> Array con Bucle FOREACH </h1>";
echo "<ul>";   
foreach ($numeros as $valor) {
    echo "<li class=\"$clase\"> $valor </li>";
}   
echo "</ul>";
?>