<?php


// Definción de una función
function hola_mundo() {

    echo "Hola Mundo!";
}

function suma($a, $b){

return $a + $b;
}

function imprimir_tabla_multiplicar($numero){

    echo "<h1>Tabla del $numero</h1>";
    echo"<table border = \1\">";
    
    for ($i = 0; $i <=10; $i++){
        $resultado = $numero * $i;
        echo "<tr>";
        echo "<td>$numero</td><td>x</td><td>$i</td><td>$resultado</td>";
    }
}

?>