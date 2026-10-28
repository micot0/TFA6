# Laravel POS — TFA6

This project updates my TFA5 Laravel POS application to use a SQLite database instead of static arrays. It uses migrations, seeders, and Eloquent models to display customer and user records.

The application includes Home, About, Customer Accounts, and User Accounts pages, with five sample customers and five sample users.

## How to Run

Requires PHP 8.2 or later with SQLite support, Composer, and Git. Run these commands in PowerShell:

```powershell
git clone https://github.com/micot0/TFA6.git
cd TFA6
composer install
Copy-Item .env.example .env
php artisan key:generate
```

In `.env`, set `DB_CONNECTION=sqlite` and remove any active `DB_DATABASE` line.

```powershell
if (!(Test-Path database/database.sqlite)) {
    New-Item database/database.sqlite -ItemType File
}
php artisan config:clear
php artisan migrate --seed
php artisan serve
```

Open http://127.0.0.1:8000 and use the navigation links to view the records.

## Hosted Link

To be added after deployment.
