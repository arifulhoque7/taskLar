# How To Install

## Step 1: Install Dependencies

Before installing the this project, we need to make sure that our system has all the required dependencies installed. We will need to install the following dependencies:

-   PHP 8.0 or higher
-   Composer

## Step 2: Go to project directory and composer install

- first go to the project directory

```bash
cd project-name
```

- Then install composer

```bash
composer install
```
## Step 3: Now copy .env.example file to .env file


## Step 4: Now we need to create a database and add the database credentials in .env file

```bash
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_db_name
DB_USERNAME=your_db_user_name
DB_PASSWORD=your_db_password
```

## Step 5: Now we need to run these commands

```bash
php artisan key:generate
php artisan migrate
php artisan db:seed --class=SearchHistoriesTableSeeder
```

## Step 6: Finally, serve this application using php artisan serve command

```bash
php artisan serve
```

## Step 7: Now you can access the application at http://127.0.0.1:8000
