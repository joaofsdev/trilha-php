<?php
/* 3 – Escreva uma função que retorne à quantidade de caracteres da última palavra em uma frase, 
exemplo: 
Input: “Estou praticando exercícios” 
Output: 10 */

function contarCaracteres($frase)
{
    $palavras = explode(' ', $frase);
    $ultimaPalavra = end($palavras);
    return mb_strlen($ultimaPalavra, 'UTF-8');
}

$input = "Estou praticando exercícios";
$resultado = contarCaracteres($input);
print_r($resultado);
