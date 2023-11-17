# Setting up this laravel project in your computer

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
