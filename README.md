
## Running locally
- api
  - `composer install`
  - `php artisan serve`
- web
  - `yarn install`
  - `yarn dev`


## Docker Setup

- .env from example.env
- symlink to the root (find a better way for this)
- add env for WWWUSER and WWWGROUP (why does Sail not need this?)

## Docker

`docker compose build`
`docker compose build --no-cache`
`docker compose up`

If Nitro socket gets stuck again
`docker compose exec client ls "/tmp/nitro"`
`docker compose exec client /bin/rm -rf "/tmp/nitro/worker-*"`