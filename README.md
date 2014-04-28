# Laravel 4 jqGrid package demo

A demo of [Laravel 4 JqGrid package](https://github.com/mgallegos/laravel-jqgrid).

## Live demo 

A live demo is available at http://goo.gl/s8uNBR 

## Server Requirements

* PHP-compatible web server
* PHP >= 5.3
* MCrypt PHP Extension
* [Composer](http://getcomposer.org/download/)
 
If you are using Apache HTTP Server:
* Enable mod_rewrite Apache module
* [Enable use of Apache .htaccess files](https://help.ubuntu.com/community/EnablingUseOfApacheHtaccessFiles)

## Installation

The following steps describes how to setup a development environment on a GNU/Linux operating system:

1. git clone [https://github.com/mgallegos/laravel-jqgrid-demo.git](https://github.com/mgallegos/laravel-jqgrid-demo) demo
1. Move demo folder to your Apache document root.
1. cd ./demo
1. composer install
1. chmod 777 -R ./app/storage/ 
1. Enable mod_rewrite Apache module
1. [Enable use of Apache .htaccess files](https://help.ubuntu.com/community/EnablingUseOfApacheHtaccessFiles)
1. Open your browser and go to http://localhost/demo/public/

## License

Laravel jqGrid package demo is open source software licensed under the MIT License.
