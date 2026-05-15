<?php
/* 8- Crie uma função que encontre o elemento N que, somado a outro elemento N ou K dentro de um 
array, resulte na soma 6: 
Não deve ser utilizado loops para resolver esse exercício. 
array(1, 8, 13, 11, 1, 3, -2, -6, 5) */

function encontrarElemento($array, $soma)
{
    if (empty($array)) {
        return null;
    }

    $elemento = array_shift($array);

    if (in_array($soma - $elemento, $array)) {
        return $elemento;
    }

    return encontrarElemento($array, $soma);
}

$array = array(1, 8, 13, 11, 1, 3, -2, -6, 5);
$resultado = encontrarElemento($array, 6);

if ($resultado !== null) {
    echo "O elemento encontrado é: " . $resultado;
} else {
    echo "Nenhum elemento encontrado que satisfaça a condição.";
}
