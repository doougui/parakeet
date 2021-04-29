<h1 align="center">
  Parakeet
</h1>

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

## :mailbox_with_mail: Licença

Sinta-se livre para usar e testar. Quanto mais pessoas contribuírem, melhor!
