# 🎤 Apresentação do Projeto

## Calculadora de Índice de Massa Corporal (IMC)

### Apresentação

Este projeto foi desenvolvido como parte da minha jornada de aprendizado em PHP, com o objetivo de colocar em prática os conceitos fundamentais da linguagem por meio da criação de uma aplicação web funcional.

Durante o desenvolvimento, procurei construir a aplicação do zero, entendendo cada etapa do processo, desde a criação da interface até a implementação da lógica de cálculo utilizando PHP.

---

## Processo de Desenvolvimento

O desenvolvimento foi dividido em etapas para facilitar o aprendizado e garantir uma evolução gradual da aplicação.

### 1. Planejamento

Inicialmente, foi definido o objetivo da aplicação: desenvolver uma calculadora capaz de receber o peso e a altura do usuário, calcular o Índice de Massa Corporal (IMC) e apresentar sua classificação conforme os parâmetros da Organização Mundial da Saúde (OMS).

---

### 2. Desenvolvimento da Interface

A interface foi construída utilizando **HTML5** e **CSS3**, buscando uma aparência limpa, organizada e intuitiva.

Nesta etapa foram implementados:

* Estrutura semântica da página;
* Formulário para entrada dos dados;
* Campos para peso e altura;
* Botão para envio das informações;
* Validação de preenchimento utilizando o atributo `required`;
* Estilização com Flexbox, sombras, bordas arredondadas e efeitos de interação.

---

### 3. Implementação da Lógica

Após a conclusão da interface, foi iniciada a implementação da lógica utilizando PHP.

Foram utilizados conceitos como:

* Captura de dados através do método **GET**;
* Validação utilizando `isset()`;
* Criação de funções;
* Parâmetros e retorno (`return`);
* Operadores matemáticos;
* Estruturas condicionais (`if`, `elseif` e `else`);
* Arredondamento do resultado utilizando `round()`.

O cálculo foi encapsulado em uma função específica, tornando o código mais organizado e reutilizável.

---

### 4. Classificação do IMC

Após o cálculo, a aplicação compara automaticamente o resultado com as faixas de classificação estabelecidas pela Organização Mundial da Saúde (OMS), exibindo ao usuário sua respectiva categoria.

---

### 5. Organização do Projeto

O projeto foi organizado separando responsabilidades entre:

* Estrutura da página (HTML);
* Estilização (CSS);
* Processamento e regras de negócio (PHP).

Essa organização facilita futuras melhorias e contribui para um código mais limpo e de fácil manutenção.

---

# Solução Desenvolvida

Como resultado, foi desenvolvida uma aplicação web capaz de:

* Receber o peso e a altura do usuário;
* Validar o preenchimento dos campos;
* Calcular automaticamente o Índice de Massa Corporal (IMC);
* Exibir o resultado com duas casas decimais;
* Informar a classificação correspondente segundo os critérios da Organização Mundial da Saúde (OMS);
* Apresentar uma interface simples, organizada e de fácil utilização.

Além de atender ao objetivo proposto, este projeto proporcionou uma experiência prática com os principais fundamentos do desenvolvimento em PHP, consolidando conhecimentos importantes para projetos mais avançados e para a continuidade dos estudos em desenvolvimento web.

---

## Considerações Finais

Este projeto representa um importante marco no meu processo de aprendizagem em PHP. Durante seu desenvolvimento, foi possível compreender não apenas a sintaxe da linguagem, mas também a importância da organização do código, da reutilização por meio de funções e da construção de aplicações baseadas em boas práticas.

Como próximos passos, pretendo evoluir este projeto aplicando novos conceitos da linguagem, integração com banco de dados, orientação a objetos e, futuramente, utilizando o framework Laravel para desenvolver aplicações ainda mais completas e robustas.
