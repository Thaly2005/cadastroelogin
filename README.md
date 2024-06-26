[Projeto - Aplicação de Cadastro e login](#projeto---aplica%C3%A7%C3%A3o-de-cadastro-e-login)

[Descrição](#descri%C3%A7%C3%A3o)

[Introdução](#introdu%C3%A7%C3%A3o)

[Funcionalidades](#funcionalidade)

[Tecnologias Utilizadas](#tecnologias-utilizadas)

[Fontes Consultadas](#fontes-consultadas)

[Autores](#autores)

# Projeto - Aplicação de cadastro e login

<img src="_img/demonstração.gif">

## Descrição:
Esse código cria três páginas, nomeadas "Início", "Cadastro" e por fim "Log in". Além de uma ligação com um banco de dados para as duas últimas páginas mencionadas, a de cadastro e log in. 

## Introdução:
Este projeto é uma aplicação web simples de cadastro e login, desenvolvida como uma atividade prática para reforçar conceitos já conhecidos sobre desenvolvimento web e integração com bancos de dados. A aplicação consiste em uma tela principal, uma tela de login e uma tela de cadastro, todos implementados em PHP e utilizando MySQL como banco de dados.

## Funcionalidade:

Estrutura do Projeto
A aplicação é composta pelos seguintes arquivos e suas respectivas funcionalidades:

`index.php`: A tela principal da aplicação, que serve como ponto de entrada para o usuário.

`cadastro.php`: A tela de cadastro onde novos usuários podem se registrar fornecendo nome, e-mail, senha e tipo de usuário.

`login.php`: A tela de login onde usuários registrados podem acessar a aplicação fornecendo suas credenciais.

`processar_cadastro.php`: Script PHP responsável por processar os dados do formulário de cadastro e inserir os novos usuários na tabela cadUser do banco de dados.

`processar_login.php`: Script PHP responsável por validar as credenciais de login e, em caso de sucesso, registrar o login na tabela tbLogin.

`db_connection.php`: Script PHP que gerencia a conexão com o banco de dados MySQL.

`sucesso.php`: Página exibida após um login bem-sucedido, onde uma mensagem de boas-vindas é mostrada ao usuário.

## Tecnologias Utilizadas:

Essas foram as tecnologias utilizadas:

CSS

<img src="_img/css.png" width="30%">

MySQL

<img src="_img/my.png" width="30%">

PHP

<img src="_img/php.png" width="30%">

Visual Studio Code

<img src="_img/vscode.png" width="30%">


## Fontes Consultadas:

[PHP](https://www.php.net/docs.php) - Documentação do PHP

[MySQL](https://dev.mysql.com/doc/) - Documentação do MySQL

[Bootstrap](https://getbootstrap.com/docs/5.0/examples/) - Bootstrap Exemplos

[Consulta BD](https://consultabd.wordpress.com/2019/11/11/conectando-o-vs-code-com-o-sql-server/) - Conectando o VS Code com o SQL Server

## Autores
Thalyta das Neves Ferreira 3°A
