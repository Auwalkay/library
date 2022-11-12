<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About The Project

This application is an online library system built with laravel framework.

## Dependencies/ Technology Required

PHP versio 8.1.6
Apache or Nginx
Laravel Framework 9.34.0
MYSQL
composer

## User Login Details

## Deployment Guide

1. clone or download the repository from the github
2. open the project folder in command prompt
3. Run compser-install
4. Run php artisan key:generate
5. copy .env.example to .env file
6. set name of the database with the appropriate user details
7. create a database on mysql with thesame database name you choose
8. run php artisan:migarate to create database table
9. Run php artisan schedule:work to run the schedulers
10. Run php artisan serve

## OR

1. Create a database name: library
2. Import the library.sql file from the project folder
3. Open the project folder in command prompt
4. Run php artisan server
5. Run php artisan schedule:work to run the schedulers

## Default Login details

librarian
email: librarian@online.com
password: 12345

Reader:
email: reader@online.com
password: 12345
