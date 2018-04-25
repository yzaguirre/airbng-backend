# Vuebnb project

Hello there! This is the source code repo for the vuebnb website.

These are some of the frameworks and tools in use:
- Laravel
- Vue.js
- Webpack

## Developer setup
Create the MariaDB database
```sql
CREATE DATABASE vuebnb;
```

Assuming [atom](http://atom.io/) is the chosen IDE.
```bash
cd vuebnb
composer install
npm install
cp .env.example .env
php artisan key:generate
```
Edit `.env` with database credentials
```bash
atom .env
```

## Run dev server
Compile sources

npm run dev
