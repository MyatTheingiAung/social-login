# Social Login


## Requirements

```
PHP 7.4
MySQL 5.7 or 8
```

## Installation

Clone the repo locally:
```
git clone https://github.com/MyatTheingiAung/social-login.git
cd social-login
```

Install PHP dependencies:
```
composer install
```

Setup configuration:
```
copy env.example .env
```

Generate application key:
```
php artisan key:generate
```

Run database migrations:
```
php artisan migrate
```

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
DB_DATABASE=social
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


GITHUB ID and Secret Key
```
GITHUB_CLIENT_ID=
GITHUB_CLIENT_SECRET=
```
Create Github ID in following link:
> https://github.com/settings/developers


