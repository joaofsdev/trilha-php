# 🛒 Carrinho de Compras em PHP

> Aplicação de carrinho de compras desenvolvida em PHP com orientação a objetos, controle de estoque e regras de pagamento.

![Status](https://img.shields.io/badge/status-conclu%C3%ADdo-brightgreen)
![PHP](https://img.shields.io/badge/PHP-8.1+-777bb4)
![POO](https://img.shields.io/badge/POO-estrutura%20orientada%20a%20objetos-blue)

---

## 📋 Índice

- [Visão geral](#-visão-geral)
- [Funcionalidades](#-funcionalidades)
- [Tecnologias](#-tecnologias)
- [Estrutura do projeto](#-estrutura-do-projeto)
- [Como executar](#-como-executar)
- [Exemplo de uso](#-exemplo-de-uso)
- [Observações](#-observações)
- [Licença](#-licença)

---

## 🎯 Visão geral

Este projeto é uma implementação simples e didática de um carrinho de compras em PHP, criada para praticar conceitos de programação orientada a objetos, organização em camadas e regras de negócio aplicadas ao processo de compra.

A aplicação permite cadastrar produtos, adicionar itens ao carrinho, remover itens com atualização automática de estoque e calcular o total com descontos conforme a forma de pagamento.

---

## ✨ Funcionalidades

- Cadastro de produtos com nome, preço e estoque
- Adição de produtos ao carrinho com controle de quantidade
- Remoção de itens do carrinho com retorno ao estoque
- Cálculo do subtotal por item
- Cálculo do total do carrinho
- Aplicação de desconto por forma de pagamento
- Regras de validação para estoque e quantidades inválidas
- Tratamento de exceções personalizadas

---

## 🛠 Tecnologias

| Tecnologia                      | Uso no projeto                                |
| ------------------------------- | --------------------------------------------- |
| PHP 8.1+                        | Linguagem principal da aplicação              |
| Programação Orientada a Objetos | Organização das entidades e regras de negócio |
| Enums                           | Representação das formas de pagamento         |
| Exceções personalizadas         | Tratamento de erros de estoque                |
| Terminal/CLI                    | Execução do exemplo principal                 |

---

## 📁 Estrutura do projeto

```text
main.php
src/
├── Enums/
│   └── FormaPagamento.php
├── Exceptions/
│   └── EstoqueInsuficienteException.php
├── Models/
│   ├── Carrinho.php
│   └── Produto.php
└── Services/
    └── CarrinhoService.php
```

---

## 🚀 Como executar

### Pré-requisitos

- PHP 8.1 ou superior
- Terminal ou prompt de comando

### Execução

1. Acesse a pasta do projeto.

2. Execute o arquivo principal:

   ```bash
   php main.php
   ```

3. Verifique a saída no terminal com os itens do carrinho e os totais calculados.

---

## 📌 Exemplo de uso

O arquivo principal cria dois produtos de exemplo, adiciona itens ao carrinho e exibe o total com diferentes formas de pagamento.

Formas de pagamento disponíveis:

- Pix — desconto de 10%
- Cartão — desconto de 5%
- Boleto — desconto de 2%

---

## 🔐 Regras de negócio

- Não é permitido adicionar quantidades maiores que o estoque disponível.
- Não é permitido remover mais itens do que existem no carrinho.
- Quantidades menores ou iguais a zero geram erro.
- Preço e estoque não podem ser negativos.

---

## 📦 Componentes principais

- `Produto`: representa um item do catálogo com validações de domínio.
- `Carrinho`: armazena os itens e gerencia quantidades.
- `CarrinhoService`: centraliza as operações de adição, remoção e cálculo de total.
- `FormaPagamento`: define as opções de pagamento e seus descontos.
- `EstoqueInsuficienteException`: exceção personalizada para controle de estoque.

---

## 📄 Observações

- Projeto desenvolvido com foco em estudo e prática de PHP.
- A aplicação é executada via terminal e não depende de banco de dados.
- Não há integração com API externa ou sistema de pagamento real.
- O estado do carrinho é mantido apenas em memória durante a execução.

---

## 📄 Licença

Projeto concluído para fins de estudo e portfólio.
