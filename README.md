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
    
    Get the local URL ie localhost:8000/api
    Test using tools like postman

## ABOUT THE API

### API Source Code 

    https://github.com/codejutsu1/Hng-task-two

### UML and E-R Diagrams

<p align="center"><img src="public/uml/api2.png" width="500"></p>
<p align="center"><img src="public/uml/api3.png" width="500"></p>

## FORMATS FOR EACH ENDPOINT

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
An endpoint to create a new person. It only required one parameter "name" and it must be a string.

    yourapp.com/api

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

    yourapp.com/api/1

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

    yourapp.com/api/1

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