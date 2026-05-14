<?php

$produtos = [
	['nome' => 'Monitor', 'preco' => 1510.90],
	['nome' => 'Mouse', 'preco' => 129.90],
	['nome' => 'Mousepad', 'preco' => 24.50],
	['nome' => 'Fone de ouvido', 'preco' => 79.99],
	['nome' => 'Microfone', 'preco' => 49.99],
];

$produtosFiltrados = [];
$total = 0;

for ($i = 0; $i < count($produtos); $i++) {
	$produto = $produtos[$i];

	if ($produto['preco'] > 50) {
		$desconto = $produto['preco'] * 0.15;
		$precoFinal = $produto['preco'] - $desconto;

		$produtosFiltrados[] = [
			'nome' => $produto['nome'],
			'preco_original' => $produto['preco'],
			'preco_desconto' => $precoFinal,
		];

		$total = $total + $precoFinal;
	}
}

echo "Produtos acima de R$50 com 15% de desconto:\n\n";

for ($i = 0; $i < count($produtosFiltrados); $i++) {
	$produto = $produtosFiltrados[$i];

	echo "Produto: " . $produto['nome'] . "\n";
	echo "Preco original: R$ " . number_format($produto['preco_original'], 2, ',', '.') . "\n";
	echo "Preco com desconto: R$ " . number_format($produto['preco_desconto'], 2, ',', '.') . "\n";
}

echo "Total final: R$ " . number_format($total, 2, ',', '.') . "\n";