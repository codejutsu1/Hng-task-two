# Rest API CRUD Operation on "Person"
An API that dynamically handle parameters, such as adding, retrieving, updating or deleting a person by user_id (CRUD operation).

## HOW TO SET UP THIS PROJECT IN YOUR LOCAL MACHINE

### START (LARAVEL WEB SITE) LOCAL DEV

    clone this repository to your local machine
    run `composer update` && composer dump-autoload
    run php artisan key:generate && php artisan migrate 
    Transfer all content in .env.example to a new file .env
    configure the .env
    Then run php artisan serve to serve the application on local machine