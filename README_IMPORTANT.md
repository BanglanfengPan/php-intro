# HOW TO RUN PHP SERVER LOCALLY WITH JUST PHP:
`php -S localhost:8080`
above is a command line to run php index file on a local server (not good for prod tho, use nginx)
by default it accesses index.php but you can access individual files with

localhost:8080/network_requests.php
`tail -f logs/query.log`
to see the logs stream in

# PHP INI FILE TO SEE THE PHP SETTINGS
`php -r "phpinfo();" | grep php.ini`
output:
`Loaded Configuration File => /opt/homebrew/etc/php/8.2/php.ini`

# How to Start PHPMyAdmin Server to work with PHP and MySQL

1. Navigate to phpMyAdmin folder (where you downloaded from phpadmin)
`cd /Users/amirganiev/Documents/learning/php/phpMyAdmin-5.2.1-all-languages`

2. Start the php server in the folder
`php -S localhost:8090`

3. `config.sample.inc.php` contains important configuration for phpMyAdmin.
Such as host path (default is localhost)
You can configure this file and save to `config.inc.php`

# HOW TO WORK WITH MYSQL LOCALLY:
Installation process:
1. Now simply run the below command in your terminal
$ brew install mysql

2. Start the MySQL service
$ brew services start mysql

3. Set root MySQL password
$ mysqladmin -u root password 'secretpassword'

4. Access MySQL on mac , THE PASSWORWID IS 'secretpassword'
$ mysql -u root -p

Command will ask the password you just set in the previous step.

Things to remember
Stop MySQL service on Mac start

If you don't want MySQL service to start every time you start your mac then run the below command

$ brew services stop mysql
This will stop the MySQL service from running in the background.

Start MySQL service

You can always run the below command to start the MySQL server on mac and it will not start on the next computer restart

$ mysql.server start
Stop MySQL service

If you want to immediately stop the MySQL service then run the below command

$ mysql.server stop

#HOW TO WORK WITH COMPOSER
https://weaintplastic.github.io/web-development-field-guide/Development/Frontend_Development/Setting_up_your_project/Setup_Dependency_Managers/Composer/Initialize_Composer_on_a_new_Project.html

Use your command line and navigate to the root folder of your project and enter

$ composer init
After that you'll get some questions ask in order to generate composers's configuration file `composer.json``

```
Package name (<vendor>/<name>): vendor/name
Description []: // leave empty
Author: Roland Loesslein <info@weaintplastic.com>
Minimum Stability []: // leave empty if not specified
License []: // leave empty if not specified
Would you like to define your dependencies (require) interactively [yes]? no
Would you like to define your dev dependencies (require-dev) interactively [yes]? no
Do you confirm generation [yes]? yes
```
To specify a directory where the composer libraries are saved to, please open up your composer.jsonand add the following line. I just tend to rename the default vendor-dir vendor to composer_vendor to follow the naming scheme that is used by Bower and NPM.

```
"config": {
    "vendor-dir": "composer_vendor"
}
```
You are now ready to install your third party libraries, frameworks and such using composer. Therefore you use your command line and the command composer require
```
$ composer require erusev/parsedown:~1.0
```
The installed packages are saved in your projects root folder named composer_vendor. While your frontend dependencies are usually not needed during runtimem but compiled for shipping, your composer dependencies are most likely used during runtime. Make sure to NOT exclude your composer_vendor folder from being tracked by git.
