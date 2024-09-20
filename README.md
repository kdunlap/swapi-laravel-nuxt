## Technologies Used

- Backend: Laravel
  - http://localhost:8000
- Frontend: Nuxt
  - NuxtUI
  - Tailwind

## Running locally with Docker

1. From inside the `/api` folder run

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan migrate`
  - select `yes` to create the `.sqlite` file

2. Then from the project root run

- `docker compose build`
- `docker compose up`

## Running locally without Docker

1. From inside the `/api` folder run

- `composer install`
- `cp .env.example .env`
- `php artisan key:generate`
- `php artisan serve`

2. From inside the `/web` folder run

- `yarn install`
- `yarn dev`

## Docker

`docker compose build`
`docker compose build --no-cache`
`docker compose up`

If Nitro socket gets stuck again

- `docker compose exec web ls "/tmp/nitro"`
- `docker compose exec web /bin/rm -rf "/tmp/nitro/worker-85-1.sock"`
