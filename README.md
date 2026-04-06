# Gerenciamento de currículos

## Descrição rápida

Sistema ainda em desenvolvimento para registro e edição de dados de currículos, idealizado para ser utilizado por equipes de RH.

## Tecnologias útilizadas

```
HTML 5
css
php
phpmyadmin
mysql
```

## Como fazer uso do programa

No arquivo 'login.php' da pasta raiz, deve-se inicialmente alterar os dados da linha 8 para os dados do seu banco de dados, eles devem ser inseridos da seguinte forma:
```php
    $connect = new mysqli(string|null "hostname", string|null "username", string|null "password", string|null "database", int|null "port", string|null "socket");
```
Sendo null o valor padrão dos dados.

Em seguida criar o arquivo 'secret_code.php' e adicionar uma senha para o mesmo no seguinte formato
```php
<?php $secretkey = "SuaSenha" ?>
```

A criação dos usuários é feito por inserção no próprio dashboard do phpmyadmin(Ainda pretendo criar um pequeno sistema a parte para melhor adição dos mesmos)
E usando o diretório do servidor, deve carregar o código do create_json.php para a criação do arquivo .json que contem o tokens de segurança dos usuários, que faz uso dos dados pessoais criptografados e o secret_code também criptografado, criando um token também criptografado.
### Observação
Por questão de segurança o arquivo create_json.php pode ser removido da pasta após a criação da lista, mas deve sempre ser executado quando adicionado um novo usuário, para que seu token de segurança seja adicionado na lista de chaves.
