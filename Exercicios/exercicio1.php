<?php
/* Escreva uma função que coloque todos os zeros de um array no final, exemplo: 
Input : array(0,2,3,4,6,7,10) 
Output : Array 
( 
[0] => 2 
[1] => 3 
[2] => 4 
[3] => 6 
[4] => 7 
[5] => 10 
[6] => 0 
) 
 */

function ordenarZeros($array)
{
    $zeros = array();
    $naoZeros = array();

    foreach ($array as $valor) {
        if ($valor === 0) {
            $zeros[] = $valor;
        } else {
            $naoZeros[] = $valor;
        }
    }

    return array_merge($naoZeros, $zeros);
}

$input = array(0, 3, 15, 0, 5, 6, 7, 0, 9);
$resultado = ordenarZeros($input);
print_r($resultado);
