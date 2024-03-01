# Docs

To run project process next commands:

> composer update

Then create database and process next command

> php artisan migrate

## Admin panel

To access admin panel you can redirect to page

> /admin/login

Before this action you need to create User record, then authorize this user in admin panel.

You can create user on next command:

> php artisan make:filament-user

## API Methods

### Get User info

> ***Method: GET***
> 
>> /api/users/{id}
> 
>Gets User info by User ID in system

> ***Method: PUT***
> 
>> /api/users/{id}
> 
>Updates User info by User ID in system
