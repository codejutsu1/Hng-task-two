# REST API CRUD Operation on "Person"
An API that dynamically handle parameters, such as adding, retrieving, updating or deleting a person by user_id (CRUD operation).

## HOW TO SET UP THIS PROJECT IN YOUR LOCAL MACHINE

### START (LARAVEL WEB SITE) LOCAL DEV

    clone this repository to your local machine
    run composer update && composer dump-autoload on your terminal
    run php artisan key:generate && php artisan migrate on your terminal
    Transfer all content in .env.example to a new file .env
    configure the .env
    Then run php artisan serve to serve the application on local machine

### Testing the API
    
    Get the local URL eg localhost:8000/api
    Test using tools like postman

## ABOUT THE API

### API Source Code 

    https://github.com/codejutsu1/Hng-task-two

### UML and E-R Diagrams

<p align="center"><img src="public/uml/api1.png" width="500"></p>
<p align="center"><img src="public/uml/api2.png" width="500"></p>
<p align="center"><img src="public/uml/api5.png" width="500"></p>

## STANDARD FORMATS FOR EACH ENDPOINT

### CREATE A PERSON

    {
        "message" : "Request was successful",
        "data" : {}, 
        "status_code" : 201,
    }

### READ A PERSON

    {
        "message" : "Request was successful",
        "data" : {}, 
        "status_code" : 200,
    }

### UPDATE A PERSON

    {
        "message" : "Request was successful",
        "data" : {}, 
        "status_code" : 200,
    }

### DELETE A PERSON

    {null}

# SAMPLE USAGE

## - POST create a person
An endpoint to create a new person. It only requires one parameter "name" and it must be a string.

    https://hng-task-two-production.up.railway.app/api

### REQUEST HEADERS

    Accept                application/json

### BODY (form data)

    name                  Daniel

### Response

    {
        "message": "Request was successful.",
        "data": {
            "persons": {
                "id": 1,
                "name": "Daniel"
            }
        },
        "status_code": 201
    }

## - GET get a person
An endpoint to get a single person. The endpoint, api/user_id accepts integer as a parameter and the person must exist in the database.

    https://hng-task-two-production.up.railway.app/api/1

### REQUEST HEADERS

    Accept                application/json

### Response

    {
        "message": "Request was successful.",
        "data": {
            "persons": {
                "id": 1,
                "name": "Daniel"
            }
        },
        "status_code": 200
    }

## - PUT update a person
This endpoint is responsible for updating a person's record. The endpoint api/user_id, accepts an integer as the user_id and the person must exist in the database.

    https://hng-task-two-production.up.railway.app/api/1

### REQUEST HEADERS

    Accept                application/json

### BODY (urlencoded)

    name                  James

### Response

    {
        "message": "Request was successful.",
        "data": {
            "persons": {
                "id": 1,
                "name": "James"
            }
        },
        "status_code": 200
    }

## - DELETE delete a person
This endpoint is responsible for deleting a person's record. The endpoint api/user_id, accepts an integer as the user_id and the person must exist in the database.

    https://hng-task-two-production.up.railway.app/api/1

### REQUEST HEADERS

    Accept                application/json

### Response

    {}

## TESTING

<a href="https://documenter.getpostman.com/view/29425162/2s9YC32EZv" target="_blank">Click here to see more about the documentation</a>