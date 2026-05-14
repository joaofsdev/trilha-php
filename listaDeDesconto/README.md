# Lista de Descontos (PHP)

> Script simples em PHP para aplicar desconto em produtos com preço acima de um limite.

![Status](https://img.shields.io/badge/status-conclu%C3%ADdo-brightgreen)
![PHP](https://img.shields.io/badge/PHP-7.4%2B-blue)

---

## 📋 Índice

- [Visão geral](#-visão-geral)
- [Como funciona](#-como-funciona)
- [Como executar](#-como-executar)
- [Personalização](#-personaliza%C3%A7%C3%A3o)
- [Exemplo de saída](#-exemplo-de-sa%C3%ADda)
- [Licença](#-licen%C3%A7a)

---

## 🎯 Visão geral

Este repositório contém um script PHP (`main.php`) que calcula e exibe os produtos com desconto. O objetivo é demonstrar lógica básica de arrays, laços e formatação de valores em PHP.

O projeto é intencionalmente simples e serve como material didático ou utilitário para aplicações que precisem calcular descontos rapidamente.

Status do projeto: Concluído ✅

---

## ⚙️ Como funciona

- O arquivo `main.php` contém uma lista de produtos (nome e preço).
- Para cada produto com preço maior que R$50, aplica-se 15% de desconto.
- O script acumula os produtos com desconto e calcula o total final.

---

## 🚀 Como executar

Requisitos:

- PHP instalado (linha de comando).

Para executar pelo terminal (no diretório do projeto):

```bash
php main.php
```

O script imprimirá no terminal a lista de produtos elegíveis e o total com desconto.

---

## ⚙️ Personalização

- Para alterar os produtos ou preços, edite o array em `main.php`.
- Para ajustar a regra de desconto (percentual ou limite), modifique as variáveis dentro do loop.

Trechos relevantes em `main.php`:

- Lista de produtos: o array `$produtos`
- Percentual aplicado: `0.15` (15%)
- Limite de preço verificado: `> 50`

---

## 🧾 Exemplo de saída

Exemplo gerado pelo script:

```text
Produtos acima de R$50 com 15% de desconto:

Produto: Monitor
Preco original: R$ 1.510,90
Preco com desconto: R$ 1.284,27
Produto: Mouse
Preco original: R$ 129,90
Preco com desconto: R$ 110,42
Total final: R$ 1.394,69
```

---

## 📄 Licença

Projeto desenvolvido para fins de estudo.
