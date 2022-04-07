# Did I See This Episode? (DISTE)

This project is the result of my studies of the Laravel framework, which started in the last week of February 2022 and consuming a few hours of my weekends since then. The main goal is to understand how Laravel works, its connections with the database, authentication system, simple pages with some information, etc.

DISTE can be opened at http://diste.rafaelamorim.com.br. New users, it's needed a registration by clicking on Registration at the top corner (or sandwich menu, in mobile) of the screen before login. All your data are personal. 

![Screenshot](https://www.rafaelamorim.com.br/temp/diste-0-0-1.png)

It's a lot of things to learn yet, but I will put this project on GitHub, to others can learn a little bit of this framework.

## How to apply the code on Laravel project

I don't like the way of Hello World projects are shared to GitHub with all Laravel files and all dependencies. Also, I don't know (yet) if it's the right way to share a Laravel project. If you can send me a tip, I will be grateful :-)

In a terminal, copy/paste these commands inside your /var/www/ folder. If you wish to use a folder with a different name, change the value in DISTE_FOLDER line before running these script.

<pre>
    DISTE_FOLDER=diste
    composer create-project laravel/laravel:^8.0 $DISTE_FOLDER
    cd $DISTE_FOLDER
    composer require laravel/ui
    sed -i 's/APP_NAME=Laravel/APP_NAME="Did I see this episode?"/g' .env
</pre>

Now, set database info (host, port, database, user, and password) in .env file. Then run the commands below inside application folder

<pre>
git clone https://github.com/rafaelmamorim/diste
composer update
php artisan migrate
</pre>

Finish the process creating/editing your web server configuration.