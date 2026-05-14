<?php
/* 2 – Escreva uma função que encontre o elemento que aparece mais vezes em um array, exemplo: 
Input : array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6) 
Output : 5  */

function encontrarMaiorRepeticao($array)
{
    $contador = array_count_values($array);
    arsort($contador);
    $maisFrequente = key($contador);

    return $maisFrequente;
}
$input = array(1, 2, 3, 4, 5, 5, 5, 5, 5, 5, 6);
$resultado = encontrarMaiorRepeticao($input);
print_r($resultado);
