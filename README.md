# Warframe Item Checklist

## Installation:

* You have to have composer and npm/nodejs installed globally

```bash
$ composer install
$ npm install
$ npm run dev
```

Run the docker compose stack
```bash
docker-compose up -d
```

Enter the php container and build database schema
```bash
docker-compose exec php bash
./bin/console doctrine:schema:update --force
```