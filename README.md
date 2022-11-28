# Social Login

## Git clone

Clone the repo locally:
```
git clone https://github.com/MyatTheingiAung/social-login.git
```

## Installation

```
composer install
copy env.example .env
php artisan key:generate
create database 
```

## Database Migration

Run database migrations:
```
php artisan migrate
```
## Run

Run the dev server:
```
php artisan serve
```

Visit below url:
```
http://localhost:8000
```

## Configuration in `.env` file
Database **eg.**
```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=car_seller
DB_USERNAME=root
DB_PASSWORD=
```

Google ID and Secret Key
```
GOOGLE_CLIENT_ID=
GOOGLE_CLIENT_SECRET=
```
Create Google ID in following link:
> https://console.cloud.google.com/apis/dashboard


