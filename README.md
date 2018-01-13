# sf4x_my_quick_tour
my demo fs4x
#### Init Project
- http://symfony.com/doc/current/quick_tour/the_big_picture.html
- https://symfony.com/doc/current/setup/flex.html
- https://symfony.com/doc/current/contributing/index.html
- https://symfony.com/blog/symfony-4-a-new-way-to-develop-applications
- https://api-platform.com/
- https://www.getpostman.com/
```bash
$ composer create-project symfony/skeleton quick_tour
$ cp -R quick_tour/{.[!.],}* sf4x_my_quick_tour/
#install package server
$ composer require server --dev
$ php bin/console server:start
#install package route annotation
$ composer require annotations
#install package template twig
$ composer require twig
#install package profiler
$ composer require 
#install package api
$ composer require api
#udpate pdo_sqlite
$ mkdir var/data
$ php bin/console doctrine:database:create
$ php bin/console doctrine:schema:create
#add package logger
$ composer require logger
```