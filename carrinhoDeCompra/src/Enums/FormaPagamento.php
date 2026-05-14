<?php

enum FormaPagamento: string
{
    case Pix = 'Pix';
    case Cartao = 'Cartão';
    case Boleto = 'Boleto';

    public function descontoPercentual(): float
    {
        if ($this === self::Pix) {
            return 0.10;
        }

        if ($this === self::Cartao) {
            return 0.05;
        }

        return 0.02;
    }
}
