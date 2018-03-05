![App logo](https://github.com/damjanvucina/bsc-thesis/blob/master/public/pictures/header.png)

<p align="center"><em>Bachelor's Thesis</em></p>

# Web Application for Searching Freelance Computer Jobs
<p align="center"><em>The aim of this thesis is to offer a functional, comprehensive and visually attractive platform in the form of a web application, which will facilitate the process of finding business engagements. </em></p>
 
## Key Features

* Create detailed profile
* Filter jobs easily   
* Apply for projects with one click
* Express satisfaction in the form of review and evaluation 
* Profit!

![App video](https://github.com/damjanvucina/bsc-thesis/blob/master/public/pictures/videohq.gif)
<p align="center"><em>How it works?</em></p>

## Getting Started

These instructions will get you a copy of the project up and running on your local machine.

### Prerequisites

* PHP >= 5.6.4
* OpenSSL PHP Extension
* PDO PHP Extension
* Mbstring PHP Extension
* Tokenizer PHP Extension
* XML PHP Extension

### Installing

- Clone the project
- Open Command Prompt in the application folder
- Run `composer install`
- Copy `.env.example` file to `.env` in the app root folder. You can type `copy .env.example .env` if using Windows Command Prompt or `cp .env.example .env` if using Ubuntu terminal 
- Open your `.env` file and change the database name `(DB_DATABASE)` to whatever you have, username `(DB_USERNAME)` and password `(DB_PASSWORD)` field correspond to your configuration. 
   XAMPP: By default, username is root and you can leave password field empty. 
   LAMP: By default, username is root and password is also root.
   - If you want to, you can import `rad.sql` dummy database file
- Run `php artisan key:generate`
- Run `php artisan migrate`

### Deployment

- Run `php artisan serve`
- Go to `localhost:8000`

## Built With

* [Laravel](https://laravel.com/) - PHP Web framework

## Author

* [Damjan Vučina](https://github.com/damjanvucina)

## License

This project is licensed under the Apache License 2.0 License - see the [LICENSE.md](https://github.com/damjanvucina/bsc-thesis/blob/master/LICENSE) file for details

