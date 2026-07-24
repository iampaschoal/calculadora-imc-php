# ▶️ Instruções de Utilização

## Pré-requisitos

Para executar a aplicação é necessário possuir:

* XAMPP instalado;
* Servidor Apache em execução;
* Navegador de internet (Google Chrome, Microsoft Edge, Firefox ou similar).

---

## Instalação

1. Faça o download ou clone este repositório.

2. Copie a pasta **calculadora-IMC** para o diretório **htdocs** do XAMPP.

Caminho padrão:

```text
C:\xampp\htdocs\calculadora-IMC
```

---

## Inicialização

1. Abra o **XAMPP Control Panel**.

2. Inicie o serviço **Apache**.

3. Aguarde até que o serviço esteja em execução.

---

## Execução da Aplicação

Com o Apache iniciado, abra o navegador e acesse:

```text
http://localhost/calculadora-IMC/
```

A página inicial da aplicação será carregada automaticamente.

---

## Utilização

1. Informe o **peso** em quilogramas (kg).
2. Informe a **altura** em metros (m).
3. Clique no botão **"Calcular IMC"**.
4. O sistema realizará automaticamente:

   * O cálculo do Índice de Massa Corporal (IMC);
   * O arredondamento do resultado para duas casas decimais;
   * A classificação do IMC conforme os critérios da Organização Mundial da Saúde (OMS).

---

## Estrutura do Projeto

```text
calculadora-IMC/
│
├── index.php      # Página principal da aplicação
├── imc.css        # Arquivo de estilos
└── README.md      # Documentação do projeto
```

---

## Tecnologias Necessárias

* PHP
* HTML5
* CSS3
* Servidor Apache (XAMPP)

---

## Observações

* A aplicação utiliza o método **GET** para o envio dos dados do formulário.
* Os campos de entrada são obrigatórios e possuem validação utilizando o atributo `required` do HTML.
* Não é necessária a utilização de banco de dados para o funcionamento desta aplicação.
