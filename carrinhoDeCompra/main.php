<?php

require_once __DIR__ . '/src/Enums/FormaPagamento.php';
require_once __DIR__ . '/src/Exceptions/EstoqueInsuficienteException.php';
require_once __DIR__ . '/src/Models/Produto.php';
require_once __DIR__ . '/src/Models/Carrinho.php';
require_once __DIR__ . '/src/Services/CarrinhoService.php';

$produto1 = new Produto('Teclado Mecânico', 250.00, 10);
$produto2 = new Produto('Mouse Gamer', 120.00, 5);

$carrinho = new Carrinho();
$carrinhoService = new CarrinhoService();

try {
    $carrinhoService->adicionarProduto($carrinho, $produto1, 2);
    $carrinhoService->adicionarProduto($carrinho, $produto2, 1);

    echo "Itens do carrinho:\n";

    foreach ($carrinho->getItens() as $item) {
        echo '- ' . $item['produto']->getNome() . ' x' . $item['quantidade'] . ' = R$ ' . number_format($item['subtotal'], 2, ',', '.') . PHP_EOL;
    }

    echo PHP_EOL;
    echo 'Total sem desconto: R$ ' . number_format($carrinhoService->calcularTotal($carrinho), 2, ',', '.') . PHP_EOL;
    echo 'Total com Pix: R$ ' . number_format($carrinhoService->calcularTotal($carrinho, FormaPagamento::Pix), 2, ',', '.') . PHP_EOL;
    echo 'Total com Cartão: R$ ' . number_format($carrinhoService->calcularTotal($carrinho, FormaPagamento::Cartao), 2, ',', '.') . PHP_EOL;
    echo 'Total com Boleto: R$ ' . number_format($carrinhoService->calcularTotal($carrinho, FormaPagamento::Boleto), 2, ',', '.') . PHP_EOL;
} catch (EstoqueInsuficienteException | InvalidArgumentException $e) {
    echo 'Erro: ' . $e->getMessage() . PHP_EOL;
}
