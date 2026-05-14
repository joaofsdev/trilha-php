<?php
/* 7- Escreva uma função que inverta as posições dos elementos dentro de um array.  
Não usar o array_reverse do php. 
Input: array(5, 3, 1, 15) 
Output: array(15, 1, 3, 5) */

function inverterArray($array)
{
    $tamanho = count($array);
    $arrayInvertido = array();

    for ($i = $tamanho - 1; $i >= 0; $i--) {
        $arrayInvertido[] = $array[$i];
    }

    return $arrayInvertido;
}

$input = array(5, 3, 1, 15);
$resultado = inverterArray($input);
print_r($resultado);
