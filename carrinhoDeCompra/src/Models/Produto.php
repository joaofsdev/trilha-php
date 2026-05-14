<?php

require_once __DIR__ . '/../Exceptions/EstoqueInsuficienteException.php';

class Produto
{
    public function __construct(
        private string $nome,
        private float $preco,
        private int $estoque
    ) {
        if ($this->preco < 0) {
            throw new InvalidArgumentException('Preço inválido.');
        }

        if ($this->estoque < 0) {
            throw new InvalidArgumentException('Estoque inválido.');
        }
    }

    public function getNome(): string
    {
        return $this->nome;
    }

    public function getPreco(): float
    {
        return $this->preco;
    }

    public function getEstoque(): int
    {
        return $this->estoque;
    }

    public function baixarEstoque(int $quantidade): void
    {
        if ($quantidade <= 0) {
            throw new InvalidArgumentException('Quantidade inválida.');
        }

        if ($quantidade > $this->estoque) {
            throw new EstoqueInsuficienteException('Não tem estoque suficiente do produto ' . $this->nome . '.');
        }

        $this->estoque = $this->estoque - $quantidade;
    }

    public function aumentarEstoque(int $quantidade): void
    {
        if ($quantidade <= 0) {
            throw new InvalidArgumentException('Quantidade inválida.');
        }

        $this->estoque = $this->estoque + $quantidade;
    }
}
