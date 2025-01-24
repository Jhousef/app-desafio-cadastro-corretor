# Teste Imóvel Guide - Cadastrar-Corretores

Como rodar o teste proposto pela Imóvel Guide

### Passo a passo

Clone Repositório

```sh
git clone git@github.com:Jhousef/app-desafio-cadastro-corretor.git
```

```sh
cd app-desafio-cadastro-corretor
```

Crie o Arquivo .env

```sh
cp .env.example .env
```

Suba os containers do projeto

```sh
docker compose up -d
```

Acesse o container app

```sh
docker compose exec app bash
```

Instale as dependências do projeto

```sh
composer install
```

Gere a key do projeto Laravel

```sh
php artisan key:generate
```

Acesse o projeto
[http://localhost:8989](http://localhost:8989)
