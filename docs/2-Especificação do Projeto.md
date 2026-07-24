# 📋 Especificação do Projeto

## Nome do Projeto

**Calculadora de Índice de Massa Corporal (IMC)**

## Descrição

A Calculadora de IMC é uma aplicação web desenvolvida em PHP que permite ao usuário calcular seu Índice de Massa Corporal (IMC) de forma simples e rápida. A aplicação recebe o peso e a altura informados pelo usuário, realiza o cálculo automaticamente e apresenta a classificação correspondente conforme os critérios da Organização Mundial da Saúde (OMS).

Este projeto foi desenvolvido com fins educacionais, visando consolidar conhecimentos fundamentais de desenvolvimento web utilizando HTML, CSS e PHP.

---

## Objetivo

Desenvolver uma aplicação web para praticar conceitos essenciais da linguagem PHP, incluindo manipulação de formulários, funções, estruturas condicionais e integração entre HTML e CSS.

---

## Funcionalidades

* Receber o peso do usuário em quilogramas (kg);
* Receber a altura do usuário em metros (m);
* Validar o preenchimento dos campos obrigatórios;
* Calcular automaticamente o Índice de Massa Corporal (IMC);
* Exibir o resultado com duas casas decimais;
* Informar a classificação do IMC de acordo com a tabela da OMS;
* Apresentar uma interface simples, intuitiva e responsiva.

---

## Regras de Negócio

A aplicação realiza o cálculo utilizando a fórmula:

**IMC = Peso / (Altura²)**

Após o cálculo, o resultado é classificado conforme os seguintes intervalos:

| IMC              | Classificação      |
| ---------------- | ------------------ |
| Menor que 18,5   | Abaixo do peso     |
| 18,5 até 24,9    | Peso normal        |
| 25,0 até 29,9    | Sobrepeso          |
| 30,0 até 34,9    | Obesidade Grau I   |
| 35,0 até 39,9    | Obesidade Grau II  |
| 40,0 ou superior | Obesidade Grau III |

---

## Tecnologias Utilizadas

* HTML5
* CSS3
* PHP

---

## Estrutura do Projeto

```text
calculadora-imc/
│
├── index.php
├── imc.css
└── README.md
```

---

## Conceitos Aplicados

Durante o desenvolvimento deste projeto foram praticados os seguintes conceitos:

* Estrutura básica do HTML5;
* Estilização com CSS3;
* Formulários HTML;
* Método GET;
* Captura de dados utilizando `$_GET`;
* Validação com `required`;
* Uso de `isset()`;
* Criação de funções em PHP;
* Parâmetros e retorno (`return`);
* Operadores matemáticos;
* Estruturas condicionais (`if`, `elseif` e `else`);
* Arredondamento de números com `round()`.

---

## Objetivo de Aprendizagem

Este projeto faz parte da minha jornada de estudos em PHP e foi desenvolvido com o propósito de fortalecer os conhecimentos fundamentais da linguagem antes do estudo de frameworks como Laravel e do desenvolvimento de aplicações mais robustas.
