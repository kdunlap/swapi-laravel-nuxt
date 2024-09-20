# Star Wars API

This application was built to interact with the [Star Wars API](https://swapi.dev) providing a simple interface for searching people and movies. The application data is provided via a Laravel API and a Nuxt/Vue front end.

## Technologies Used

- Backend
  - http://localhost:8000
  - Laravel
- Frontend
  - http://localhost:3000
  - Nuxt
  - NuxtUI
  - Tailwind

## Running the code

After you clone this repository locally, you have 2 options to run the code:

1. Build and run a Docker container pre-configured to execute both the frontend and backend
2. Run the frontend and backend separately inside your own operating system

- You will need the following installed on your system to run locally without Docker
  - PHP 8
  - Composer
  - Node 20
- You can refer to the [Laravel](https://laravel.com/docs/11.x#creating-a-laravel-project) or [Nuxt](https://nuxt.com/docs/getting-started/installation) installation instructions for more details on requirements.

### Running locally with Docker

1. From inside the `/api` folder run

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
  - select `yes` to create the `.sqlite` file

2. Then from the project root run

- `docker compose build`
  - only run this the first time you start the application
- `docker compose up`

3. Visit http://localhost:3000 in your browser

### Running locally without Docker

1. From inside the `/api` folder run

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
  - select `yes` to create the `.sqlite` file
- `php artisan serve`

2. From inside the `/web` folder run

- `yarn install`
- `yarn dev`

3. Visit http://localhost:3000 in your browser
