<?php
/* 6- Crie uma função que mascare números de um cartão de crédito. 
Requisitos: 
• Não mascare o primeiro dígito e os últimos quatro dígitos 
• Não mascare caracteres sem dígitos (espaços) 
• Não mascarar se a entrada for menor que 6 (quantidade de caracteres) 
• Caso nada tenha sido emputado, retorne vazio “” */

function mascararCartao($numeroCartao)
{
    if (empty($numeroCartao) || strlen($numeroCartao) < 6) {
        return "";
    }

    $mascarado = $numeroCartao[0]; // Mantém o primeiro dígito

    for ($i = 1; $i < strlen($numeroCartao) - 4; $i++) {
        if ($numeroCartao[$i] === ' ') {
            $mascarado .= ' ';
        } else {
            $mascarado .= '*';
        }
    }

    $mascarado .= substr($numeroCartao, -4); // Mantém os últimos quatro dígitos

    return $mascarado;
}

$input = "1234 5678 9012 3456";
$resultado = mascararCartao($input);
echo $resultado;
