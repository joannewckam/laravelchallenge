## Description

An API that allows user to upload PDFs and see a collection of their PDFs.

## Deployment link

lendeskchallenge.test

## Getting Started/Code Installation

Navigate to lendeskchallenge.test
Register a new user
Create a new note and upload a pdf file

## Technologies Used

Laravel, Laravel Breeze, PHP, Composer

# Instructions:

Using Laravel as your framework, write an API that allows users to authenticate, upload a PDF document, and see a list of their (but no other user’s) documents. This API should be RESTful. Ideally, it’s fast and secure, but it doesn’t need to be perfect. If there are areas that your solution hasn’t had time to address, annotate them for future development.

-   [ X ] Authenticate user, upload a PDF document
-   [ X ] See a list of their documents (no other user’s)
-   [ X ] RESTful
-   [ X ] Fast and secure
-   [ X ] Documentation
-   [ ] Testing

## Planning

-   Learn Laravel framework and PHP syntax in the context of a simple CRUD project.

-   Determine the main functionality, which is to be able to upload a PDF, display all uploaded PDFs and ensure that they are linked to that user.

-   Relationship with user and uploaded files is one to many. One user can have many files and many files belong to one user.

-   Able to login as user

Routes:
index: list of files
create: form to upload a file
store: post to store listing in storage

## Build/Code Process

My approach to the challenge is creating a dashboard for a user to upload their notes.

-   Created the index and create routes and tested on Postman
-   installed Laravel Breeze for authentication and register/login

-   created a Note model that includes a required name and file
-   created the one-to-many relationship with User and Note models

-   create the routes in web.php, GET and POST
-   form includes csrf token to ensure authenticated user is posting to the route

-   used Breeze's the blades to show and create notes

## Challenges

-   Learning the framework and the nuances of PHP and Laravel. It definitely felt similar to Django but there's a lot more to dive into. I realize with this challenge that I have only applied what I learned on a surface level - there's more to improve on.
-   testing - I was manually testing in browser vs using the built in unit test.

## Wins

-   Using Laravel Breeze simplified a lot with it's registration, authentication and login all scaffolded out - it was a really great package to use

## Key Learnings/Takeaways

-   learning process for Laravel and PHP - I definitely can spend more time than a tutorial for building a CRUD app.
-   learn to write effective tests before starting to code

## Bugs

-   Error handling for file upload

## Future Improvements

-   Full CRUD operations - Update and Delete\
-   effective testing before coding each feature
