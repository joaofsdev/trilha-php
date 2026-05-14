<?php

require_once __DIR__ . '/../Models/Carrinho.php';
require_once __DIR__ . '/../Enums/FormaPagamento.php';

class CarrinhoService
{
    public function adicionarProduto(Carrinho $carrinho, Produto $produto, int $quantidade): void
    {
        $carrinho->adicionarItem($produto, $quantidade);
    }

    public function removerProduto(Carrinho $carrinho, Produto $produto, int $quantidade): void
    {
        $carrinho->removerItem($produto, $quantidade);
    }

    public function calcularTotal(Carrinho $carrinho, ?FormaPagamento $formaPagamento = null): float
    {
        $total = $carrinho->getTotal();

        if ($formaPagamento !== null) {
            $desconto = $formaPagamento->descontoPercentual();
            $total = $total - ($total * $desconto);
        }

        return round($total, 2);
    }
}
