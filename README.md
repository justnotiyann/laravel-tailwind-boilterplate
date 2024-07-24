**Clone This Repo Then Install all dependencies**

```bash
npm install && composer install
```

or with bun

```bash
bun install && composer install
```

**Renaming .env.example to .env**

```bash
mv .env.example .env
```

**Set your database**

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=laravel
DB_USERNAME=root
DB_PASSWORD=
```

**Then Generate Key**

```bash
php artisan key:generate --ansi
```

**Running all migrations and seeders**

```bash
php artisan migrate:fresh --seed
```
