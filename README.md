# Setting up this laravel project in your computer

# Pre Laravel setup 

[Configuration of php in mac](https://chat.openai.com/share/77264e19-19d4-419f-9f57-5348512465e4)
[Laravel setup in mac](https://chat.openai.com/share/3be8ff1b-c186-4784-b4b8-e8b248d6f78c)
[pgsql configuration in mac](https://chat.openai.com/share/bcae661d-13ae-461b-b884-7ab8c11b2008)

You'll need the following tools to get started. This tutorial assumes that you are running a linux distribution.

1. base-devel/build essentials
2. php
3. php-pdo-pgsql
4. pgsql
5. composer
6. laravel
7. nginx
8. node

## Setting up nginx
First, install nginx
```C++
sudo apt install nginx
sudo pacman -S nginx
```
Then start nginx
```C++
sudo systemctl enable nginx
sudo service nginx start
```

## Setting up php
```C++
sudo apt-get install php php-pgsql 
```

Enable extension from `/etc/php/php.ini`
```C++
extension = pdo_pgsql.so;
```

Enable extension
```C++
sudo systemctl enable php
sudo services php start
```

## setting up pgsql 

```C++
sudo apt-get install postgresql 
```

Edit `$PGSQL/postgresql.conf`
```C++
listen_addresses = '*'
```

Edit `$PGSQL/pg_hba.conf`
```C++
host    all             all             your_php_server_ip/32           md5
```

## Setting up node
```
sudo apt install node
```

## Setting up laravel 
1. Install composer 
2. Install laravel. 
```C++
composer require laravel/installer
composer require laravel/valet
```

# Post laravel setup

## Clone the Repository:
```
git clone https://github.com/username/repository.git
cd repository
```

## Install Composer Dependencies:
```
composer install
```
This command installs the **PHP** dependencies specified in the *composer.json* file.

## Copy the Environment Configuration:
```
cp .env.example .env
```
This command creates a copy of the .env.example file and names it .env. Update the .env file with your local configuration, especially database settings. Note that this .env.example should be sufficient for you, because I have already setted it that way. 

## Generate Application Key:
```
php artisan key:generate
```
This command generates an application key used for encryption.

## Run Database Migrations and Seeders:
```
php artisan migrate --seed
```
I'll need to set the databases up. 

## Install NPM Dependencies and Compile Assets:
```
npm install && npm run dev
```
If the project uses JavaScript and CSS assets managed by Laravel Mix, this command installs the Node.js dependencies specified in package.json and compiles the assets.

## Link the storage
```
php artisan storage:link
```
This command creates a symbolic link from public/storage to storage/app/public.

Now, any files you store in the storage/app/public directory can be accessed from the web via the public/storage URL.

## Start the Laravel Development Server:
```
php artisan serve
```
This command starts the built-in development server. By default, it will be accessible at http://localhost:8000.

Open the Application in Your Browser:
Visit http://localhost:8000 in your web browser to see the running Laravel application.

So these are done by far:
    - **Git Repo open**
    - **Project initiate**


A bit of upcoming to-do:
    - **DB Schema**
    - **Model create**
