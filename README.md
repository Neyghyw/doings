```
______      _                 
|  _  \    (_)                
| | | |___  _ _ __   __ _ ___ 
| | | / _ \| | '_ \ / _` / __|
| |/ / (_) | | | | | (_| \__ \
|___/ \___/|_|_| |_|\__, |___/
                     __/ |    
                    |___/     
```  
# Doings internship project
Laravel application for working with ToDo sheets, authorization, adding/deleting tasks is implemented, each user has their own tasks.

## Structure
- [Technologies](#Technologies)
- [Get started](#get-started)
- [Database](#database)
- [Mailhog](#mailhog)
- [Developer](#developer)

## Technologies
- [Laravel](https://laravel.com/)
- [Breeze](https://github.com/laravel/breeze)
- [Tailwind](https://tailwindcss.com/)
- [Mailhog](https://github.com/mailhog/MailHog)
- [Composer](https://getcomposer.org/)


## Get started
Clone the **repository**:
```sh
$ git clone git@github.com:Neyghyw/doings.git
```

Switch to the repo folder:
```sh
cd doings
```

Install all the **dependencies** using composer:
```sh
composer install
```

Copy the example env file and make the required configuration changes in the **.env** file
```sh
cp .env.example .env
```

Generate a new **application key**
```sh
php artisan key:generate
```

Run the database **migrations** (Set the database connection in .env before migrating)
```sh
php artisan migrate
```

Start the local **development server**
```sh
php artisan serve
```

Start the npm **development server**
```sh
npm run dev
```

**(optional)** Mailhog uses for mailing. See [Mailhog](#mailhog). For run ****mail-server**** run:
```sh
make run-docker-mailhog
```

You can now access the server at **http://localhost:8000**

## Database
Before use project, you need to set DB params in **.env**

Next, run the **database migrations** (Set the database connection in .env before migrating)
```sh
php artisan migrate
```

To populate the database with **test data** run:
```sh
php artisan seed
```
**P.S: Default user password in seed-data = password**

## Mailhog
The project uses **Mailhog** as a test mail server.

The **.env.example file** contains ready-made settings for it. The following command will be used with the settings from .env.example.
```sh
make run-docker-mailhog
```
or
```sh
docker run -p 8025:8025 -p 1025:1025 mailhog/mailhog
```

## Developer

- [Николай Кузьмин](https://t.me/smndy) — Junior web-developer
