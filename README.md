# swoll_toll

1. create user and database

postgres=# CREATE USER swoll_toll WITH PASSWORD 'sean';
CREATE ROLE
postgres=# CREATE DATABASE swoll_toll;
CREATE DATABASE

$ composer install

$ php artisan key:generate
Application key [base64:iaZZZQRXmbdtVKkJm8Ab2EC0opPZmLyMpxp1pzhPmos=] set successfully.

2. create authorization for user page

$ php artisan make:auth
Authentication scaffolding generated successfully.

3. create two tables, one for muscle groups and one for all the exercises

$ php artisan make:migration create_groups_table --create=muscle_groups
Created Migration: 2017_07_29_023316_create_groups_table

$ php artisan make:migration create_exercises_table --create=exercises
Created Migration: 2017_07_29_025304_create_exercises_table

4. migrate tables to psequel

$ php artisan migrate
Migrating: 2017_07_29_025304_create_exercises_table
Migrated:  2017_07_29_025304_create_exercises_table

5. seed tables with data

$ php artisan make:seeder GroupsTableSeeder
Seeder created successfully.
$ php artisan make:seeder ExercisesTableSeeder
Seeder created successfully.

6. make a model for each table

$ php artisan make:model muscle_groups
$ php artisan make:model exercises



