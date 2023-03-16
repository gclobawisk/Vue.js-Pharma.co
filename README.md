<h1 align="center">APLICAÇÃO EM VUE 3.0 + LARAVEL 10 </h1>

<h2 align="center">INSTALAÇÃO E CONFIGURAÇÃO DA APLICAÇÃO </h2>

### Requerimentos:

* PHP 8.2
* MYSQL ou MARIADB
* LARAVEL 10: https://laravel.com/docs/10.x
* COMPOSER https://getcomposer.org/
* Vue.js 3.0 https://vuejs.org/guide/quick-start.html


## Passo 1: Configuração do Banco de Dados

Export ou Execute uma Query do arquivo nomeado: pharma.sql, o mesmo se encontra neste repositório.

Cria uma nova pasta e clone este repositório para a mesma utilizando o comando: 

``` git clone https://github.com/gclobawisk/pharma.git ```

## Passo 2: Configuração do Ambiente de Desenvolvimento

Abra o seu Editor e execute os seguintes comandos para instalar as dependências necessárias

``` composer install ```

ou  caso esteja utilizando versões mais antigas utilize para atualizar.

```composer update```

### CONFIGURAR A ENV.

Renomeie o arquivo .env.example para .env e edite os seguintes dados para:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=pharma
DB_USERNAME=root
DB_PASSWORD=
```

Agora vamos gerar a key necessárias.
execute os comandos a seguir:

``` php artisan key:generate ``` <- Utilizada para funcionamento da aplicação em Laravel

Agora vamos instalar as dependências do node
execute os comandos a seguir:

``` npm install ```

Agora sim podemos colocar o servidor para rodar:

``` npm run dev ```

``` php artisan serve ```

<hr>
<h2 align="center">TUTORIAL PARA UTILIZAÇÃO DO SISTEMA</h2>

