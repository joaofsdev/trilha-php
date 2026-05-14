<?php
/* 4 – Escreva uma função que retorne o número que aparece o número ímpar de vezes em um array, 
exemplo: 
Input : array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4) 
Output : 2 */

function encontrarNumeroImpar($array)
{
    $contador = array_count_values($array);
    foreach ($contador as $numero => $frequencia) {
        if ($frequencia % 2 !== 0) {
            return $numero;
        }
    }
    return null;
}
$input = array(4, 5, 4, 5, 2, 2, 3, 3, 2, 4, 4);
$resultado = encontrarNumeroImpar($input);
print_r($resultado);
