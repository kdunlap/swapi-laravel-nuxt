## Running locally

- api
  - `composer install`
  - `php artisan serve`
- web
  - `yarn install`
  - `yarn dev`

## Laravel Setup

## Nuxt

- api proxy was easier than dealing with SSR vs client api calls
  - api/api/v1/people vs localhost:3000/api/v1/people
- better practice when dealing with tokens

## Docker Setup

- .env from example.env?
- generate key

## Docker

`docker compose build`
`docker compose build --no-cache`
`docker compose up`

If Nitro socket gets stuck again

- `docker compose exec client ls "/tmp/nitro"`
- `docker compose exec client /bin/rm -rf "/tmp/nitro/worker-*"`
