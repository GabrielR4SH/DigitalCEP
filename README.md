# DigitalCep

**DigitalCep** é uma biblioteca PHP para buscar informações de endereço a partir de um CEP (Código de Endereçamento Postal) utilizando a API do [ViaCEP](https://viacep.com.br).

---

## Instalação

1. Certifique-se de que você tenha o [Composer](https://getcomposer.org/) instalado em sua máquina.
2. Adicione a biblioteca ao seu projeto ou faça o download manual.

---

## Testes

Para rodar os testes da biblioteca, siga os passos abaixo:

### Passo 1: Instalar as dependências de desenvolvimento

Execute o comando abaixo para instalar o PHPUnit:

``` composer require --dev phpunit/phpunit ``` 

<hr>

## Passo 2: Rodar os testes

``` php vendor/bin/phpunit tests/ --colors=always ``` 

## Passo 3: Gerar um Relatório em Texto

Se você deseja gerar um relatório com os resultados dos testes em um arquivo de texto, execute o comando:

``` php vendor/bin/phpunit tests/ --colors=always > report.txt ``` 

<hr>

## Passo 4: Gerar um Relatório em XML ou JSON (Opcional)

Se preferir, você pode gerar relatórios em outros formatos, como XML ou JSON:

- **Relatório em XML**: 
  ```bash
  php vendor/bin/phpunit tests/ --log-junit report.xml
  ```

  - **Relatório em JSON**:
    
  ```bash
  php vendor/bin/phpunit tests/ --log-json report.json

  ```

