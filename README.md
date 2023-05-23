# Test Programmer APJII_Alfat Ardiansa

This project and repository were created to take the programmer test at APJII (Asosiasi Penyelenggara Jasa Internet Indoneisa)

# How to run

Clone this repository to your local device then run

```sh
composer install
```

Then create the database with laravel artisan. \*Make sure that the Database Configuration inside `.env` file is correct then run this command

```sh
php artisan migrate
```

Command above will create a database and its tables. Also admin account is created during migrate so no need to create one. About admin account is on the next section.
Image that the user upload is stored in Laravel Storage so by default it can not be access from public source that mean admin dashboard can not access that file either. In order to fix that run this command

```sh
php artisan storage:link
```

Then run the artisan server by executing command below

```sh
php artisan serve
```

The server should be running on http://localhost:8000

# About Default Admin Account

```
Email: admin@itfest.com
Password: admin
```
