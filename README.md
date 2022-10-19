<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a>
</p>
<p align="center"><a href="https://angularjs.org" target="_blank"><img src="https://angularjs.org/img/AngularJS-large.png" width="300"></a></p>

## Sobre

- Este projeto foi criado utilizando o framework Laravel em sua versão 9 para o backend e o Angular versão 14 para o frontend.
- Consiste em uma calculadora de financiamento baseado na tabela PRICE.
- O propósito desta calculadora não é comercial, somente um projeto pessoal.

## Preparação

- Ter instalado o docker
- Ter instalado o angularcli
- Ter instalado o NPM

## Rodando o projeto

- É necessário subir o docker para o backend
```
service docker start
```
- Instalar as dependências no projeto laravel-backend
```
docker run --rm \
    -u "$(id -u):$(id -g)" \
    -v $(pwd):/var/www/html \
    -w /var/www/html \
    laravelsail/php81-composer:latest \
    composer install --ignore-platform-reqs
```
- Após instalar as dependências execute o comando para subir o backend
```
sail up
```
- Instale as dependências do angular-frontend
```
npm install
```
- Após instalar a dependência do projeto exeucte o comando
```
ng serve
```
