<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://github.com/hassanKotti/CityWebsite/blob/main/public/assets/logo.png?raw=true" width="200"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/d/total.svg" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/v/stable.svg" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://poser.pugx.org/laravel/framework/license.svg" alt="License"></a>
</p>

## About Dubai Dashboard (City Website)

This project addressed how to build more extensive and effective city dashboards. It tackled three sets of fundamental problems: data issues; visualisation/interaction issues; and analytics/modelling issues. It used the solutions to undertake applied research that significantly extend the Dublin Dashboard through the development and testing of a new suite of querying, modelling and prediction/simulation modules and novel forms of multimedia interaction, including virtual reality, the projection of data onto architectural models, and converting data into audio-textual forms. This testbed provided a template to develop, implement and test a Cork Dashboard and influence dashboard development globally.

# Requirements

For system requirements you [Check Laravel Requirement](https://laravel.com/docs/8.x/deployment#server-requirements)

### Clone the repository from github.

    git clone https://github.com/hassank/CityWebsite.git [YourDirectoryName]

The command installs the project in a directory named `YourDirectoryName`. You can choose a different
directory name if you want.

### Install dependencies

Laravel utilizes [Composer](https://getcomposer.org/) to manage its dependencies. So, before using Laravel, make sure you have Composer installed on your machine.

    cd YourDirectoryName
    composer install

### Config file

Rename or copy `.env.example` file to `.env` 1.`php artisan key:generate` to generate app key.

1. Set your database credentials in your `.env` file
1. Set your `APP_URL` in your `.env` file.

### Database

1. Migrate database table `php artisan migrate`
1. Generate config `php artisan db:seed`

### Install Node Dependencies(optional)

1. `npm install` to install node dependencies
1. `npm run dev` to build our javascript
### Install Node Dependencies(optional)

1. `php artisan serve` to install node dependencies
1. open browser http://localhost:8000/home to see output

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
