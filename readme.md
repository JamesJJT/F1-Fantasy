## About F1 Fantasy

## Setup
- Install [Composer](https://getcomposer.org/)
- Setup the .env file from the .env.example
- CD to the project
- php artisan key:generate
- composer install
- php artisan migrate
- php artisan tinker
- factory(App\UserTeam::class, 20)->create(); (This will create 20 User Fantasy teams)

## Showing the webpage
- php artisan serve

## Or (Recommended)
- WAMP
- XAMPP
- Laragon




