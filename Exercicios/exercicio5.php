<?php
/* 5- Escreva uma função que retorne true caso uma palavra seja um palíndromo (palavra que lendo de 
trás para frente possui o mesmo significado, exemplo: osso). */

function palindromo($palavra)
{
    $ponteiro = 0;
    $tamanho = strlen($palavra) - 1;
    while ($ponteiro < $tamanho) {
        if ($palavra[$ponteiro] !== $palavra[$tamanho]) {
            return false;
        }
        $ponteiro++;
        $tamanho--;
    }
    return true;
}

$input = "osso";
$isPalindromo = palindromo($input);
if ($isPalindromo) {
    echo "A palavra é um palíndromo.";
} else {
    echo "A palavra não é um palíndromo.";
}
