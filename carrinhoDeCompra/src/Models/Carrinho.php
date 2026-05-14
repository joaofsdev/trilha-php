<?php

require_once __DIR__ . '/Produto.php';
require_once __DIR__ . '../Enums/FormaPagamento.php';

class Carrinho
{
    private array $itens = [];

    public function adicionarProduto(Produto $produto, int $quantidade): void
    {
        $this->adicionarItem($produto, $quantidade);
    }

    public function adicionarItem(Produto $produto, int $quantidade): void
    {
        $produto->baixarEstoque($quantidade);

        foreach ($this->itens as $indice => $item) {
            if ($item['produto'] === $produto) {
                $this->itens[$indice]['quantidade'] = $this->itens[$indice]['quantidade'] + $quantidade;
                return;
            }
        }

        $this->itens[] = [
            'produto' => $produto,
            'quantidade' => $quantidade,
        ];
    }

    public function removerProduto(Produto $produto, int $quantidade): void
    {
        $this->removerItem($produto, $quantidade);
    }

    public function removerItem(Produto $produto, int $quantidade): void
    {
        foreach ($this->itens as $indice => $item) {
            if ($item['produto'] === $produto) {
                if ($quantidade > $item['quantidade']) {
                    throw new InvalidArgumentException('Quantidade para remover maior que a do carrinho.');
                }

                $this->itens[$indice]['quantidade'] = $this->itens[$indice]['quantidade'] - $quantidade;
                $produto->aumentarEstoque($quantidade);

                if ($this->itens[$indice]['quantidade'] <= 0) {
                    unset($this->itens[$indice]);
                    $this->itens = array_values($this->itens);
                }

                return;
            }
        }

        throw new InvalidArgumentException('Produto não encontrado no carrinho.');
    }

    public function getItens(): array
    {
        $lista = [];

        foreach ($this->itens as $item) {
            $lista[] = [
                'produto' => $item['produto'],
                'quantidade' => $item['quantidade'],
                'subtotal' => $item['produto']->getPreco() * $item['quantidade'],
            ];
        }

        return $lista;
    }

    public function getTotal(): float
    {
        $total = 0;

        foreach ($this->itens as $item) {
            $total = $total + ($item['produto']->getPreco() * $item['quantidade']);
        }

        return $total;
    }
}
