<h1 align="center">
  Parakeet
</h1>

## :rocket: Setup

:bulb: To install the required dependencies, you'll need to have [NPM](https://www.npmjs.com/) and [Composer](https://getcomposer.org/) installed in your machine.

To install project dependencies, acesse a pasta localizada na raiz do projeto utilizando o Terminal/CMD e digite o seguinte comando:
To install project dependencies, enter the root folder of your project using the Terminal/CMD and type the following command:
 
```
npm install
``` 

and then:
```
composer install
```

It's important to notice that it's necessary that you have some server capable of executing `php` scripts and accessing relational databases (`mysql` or `mariadb` are the recommended ones for this project). You can use `XAMPP`, `WAMP`, `LAMP`, `MAMP` or any other server of your choice.

## :on: Initializing the project (dev environment)

### Environment

To adjust the correct variables for your local environment, create a copy of the file `.env.example` and paste as `.env` inside the project root. 
Fill this file with the corresponding information concerning your local environment. In the field `DB_DATABASE`, it's important to notice that you must create a database with the same name of the value filled by you in this variable.

### Migrations and seeding

To execute the database migrations, run the following command to create the required tables in your local database:

```
php artisan migrate 
```

After that, run the following command to populate your table with fake data:

```
php artisan db:seed
```

### Local server

Inside the project root, type the following command:

```
php artisan serve
```

After that you will be able to access your project in: `http://localhost:8000/`

## :mailbox_with_mail: License

Feel free to use, test and collaborate. The more contributors, the better.
