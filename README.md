<h1 align="center">
  Parakeet
</h1>

<h3 align="center">
  Projeto desenvolvido durante o curso <a href="https://laracasts.com/series/laravel-6-from-scratch" target="_blank">"Laravel from Scratch" (Laracasts)</a>. No curso, foi desenvolvida a base da aplicação, que então estou aprimorando constantemente para aprender cada vez mais sobre o <a href="https://laravel.com/" target="_blank">framework Laravel</a>.
</h3> 

## :rocket: Instalação

:bulb: Para instalar os pacotes, você precisará ter o [NPM](https://www.npmjs.com/) e o [Composer](https://getcomposer.org/) instalados em sua máquina.

Para instalar as dependências do projeto, acesse a pasta localizada na raiz do projeto utilizando o Terminal/CMD e digite o seguinte comando:
 
```
npm install
``` 

e depois:
```
composer install
```

É importante notar que é necessário que você tenha algum servidor capaz de executar scripts `php` e que torne possível o acesso a um banco de dados relacional (recomendado: `mysql` ou `mariadb`). Você pode usar o `XAMPP`, `WAMP`, `LAMP`, `MAMP` ou qualquer outro do mesmo gênero.

## :on: Inicialização do projeto (ambiente de desenvolvimento)

### Ambiente

Para configurar as variáveis para o seu ambiente local, crie uma cópia do arquivo `.env.example` e cole como `.env` na raiz do projeto. 
Preencha este arquivo com as informações correspondentes com o seu ambiente local. No campo `DB_DATABASE`, é importante notar que você deve criar o banco de dados com o mesmo nome do valor preenchido por você nesta variável.  

### Migrações e seeding

Para executar as migrações do banco de dados, execute o seguinte comando para criar as tabelas necessárias no seu banco de dados local:

```
php artisan migrate 
```

Em seguida, execute o seguinte comando para popular sua tabela com dados fícticios:

```
php artisan db:seed
```

### Servidor local

Na raiz do projeto, digite o seguinte comando:

```
php artisan serve
```

A partir disto você poderá acessar seu projeto em: `http://localhost:8000/`

## :ballot_box_with_check: Exercícios propostos

Extras:
  - The profile page banner image and description are hard-coded. Make these dynamic for each user. :heavy_check_mark:
  - There is currently no way to unlike a tweet. Add the ability to toggle a like. :heavy_check_mark:
  - Add the ability to attach an image when publishing a tweet.
  - Add a pop-up flash message when a user publishes a tweet or follows someone.
  - Consider adding [Laravel Livewire](https://laravel-livewire.com) to allow for more interactive forms.
  - When writing a new tweet, display the number of remaining characters they're allowed.
  - Allow tweets to be deleted.
  - Add support for mentions and notifications.
  - Work on responsiveness.

## :mailbox_with_mail: Licença

Sinta-se livre para usar e testar. Quanto mais pessoas contribuírem, melhor!
