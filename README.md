# Descrição do desafio Apresenta.me

Criar um projeto com Laravel e Vue.js, para cadastro, alteração, exclusão e visualização de pessoas.

Então precisaria ter que fazer login com um user e depois esse user pode realizar a manutenção de pessoas.

- [x] &nbsp;Login
- [x] &nbsp;Listagem
- [x] &nbsp;Cadastro
- [x] &nbsp;Alteração
- [x] &nbsp;Exclusão
- [x] &nbsp;Migration para criar a tabela de pessoas e seus atributos, sendo eles, id, nome, cpf, tipo (fisica/juridica), telefone e email


## 💻 Pré-requisitos

Antes de começar, verifique se você atendeu aos seguintes requisitos:


- [x] &nbsp;Laravel 10.11.0
- [x] &nbsp;PHP 8.1.18
- [x] &nbsp;Banco de dados mysql
- [x] &nbsp;node v16.15.0
- [x] &nbsp;npm 8.5.5
- [x] &nbsp;composer 2.5.5


## 🚀 Inicializando o projeto 

Para usar, siga estas etapas:

1 Executar migrations
```
// inserir login do banco no .env

php artisan migrate
```

2 Executar o projeto
```
php artisan serve
```

