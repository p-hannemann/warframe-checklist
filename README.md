# Warframe Item Checklist

## Installation:

* You have to have composer and npm/nodejs installed globally

```bash
$ composer install
$ npm install
$ npm run dev
```

Enter the php container
``docker-compose exec php bash``

run following command to build the database:

```bash
./bin/console doctrine:schema:update --force
```