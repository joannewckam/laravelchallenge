## Description

An API that allows user to upload PDFs and see a collection of their PDFs.

## Deployment link

## Getting Started/Code Installation

Explain how the reader accesses your code. Include a step by step approach.

### Timeframe & Working Team (Solo/Pair/Group)

Share the timeframe given for the project and whether you worked independently, in a pair, or in a group.

If you worked in a pair or group, include the names of the people you collaborated with. As a bonus, you can also provide links to their GitHub repo.

## Technologies Used

List every technology you used to complete the project. This can be in one long list, or broken down into categories (Back End, Front End, Development Tools).

## Brief

# Instructions:

Using Laravel as your framework, write an API that allows users to authenticate, upload a PDF document, and see a list of their (but no other user’s) documents. This API should be RESTful. Ideally, it’s fast and secure, but it doesn’t need to be perfect. If there are areas that your solution hasn’t had time to address, annotate them for future development.

-   [ ] Authenticate, upload a PDF document
-   [ ] See a list of their documents (no other user’s)
-   [ ] RESTful
-   [ ] Fast and secure
-   [ ] Testing
-   [ ] Documentation

## Planning

Learn Laravel framework and PHP syntax in the context of a simple CRUD project.

Determine the main functionality, which is to be able to upload a PDF, display all uploaded PDFs and ensure that they are linked to that user.

Relationship with user and uploaded files is one to many. One user can have many files and many files belong to one user.

login as a user - username and password

index: list of files
create: form to upload a file
store: post to store listing in db

# Endpoints

All note: GET /api/notes
Create a note: POST /api/notes
Update a note: PUT /api/notes/{id}
Delete a note: DELETE /api/notes/{id}

## Build/Code Process

## Challenges

## Wins

## Key Learnings/Takeaways

## Bugs

## Future Improvements
