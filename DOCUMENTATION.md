# API Documentation

## Standard Formats

### Requests

- All requests must include the appropriate headers and follow the specified HTTP method for each endpoint.
- Request bodies must be in JSON format.

### Responses

- Successful responses will have an appropriate status code (e.g., 200 OK, 201 Created) and include the response body in JSON format.
- Error responses will have an appropriate status code and include an error message in the response body.

## Endpoints

### Create a Person

- URL: `/api/person/create.php`
- Method: POST
- Request Body:
  ```json
  {
    "name": "John Doe"
  }
  ```
- Success Response:
  - Status: 201 Created
  - Body:
    ```json
    {
      "id": 1,
      "name": "John Doe"
    }
    ```
- Error Responses:
  - Status: 400 Bad Request
    - Body:
      ```json
      {
        "error": "Invalid request body"
      }
      ```
  - Status: 500 Internal Server Error
    - Body:
      ```json
      {
        "error": "Failed to create person"
      }
      ```

### Get a Person

- URL: `/api/person/read.php?id=<person_id>`
- Method: GET
- Success Response:
  - Status: 200 OK
  - Body:
    ```json
    {
      "id": 1,
      "name": "John Doe"
    }
    ```
- Error Responses:
  - Status: 404 Not Found
    - Body:
      ```json
      {
        "error": "Person not found"
      }
      ```
  - Status: 500 Internal Server Error
    - Body:
      ```json
      {
        "error": "Failed to retrieve person"
      }
      ```

### Update a Person

- URL: `/api/person/update.php?id=<person_id>`
- Method: PUT
- Request Body:
  ````json
  {
    "name": "Jane Smith"
  }
  ```
- Success Response:
  - Status: 200 OK
  - Body:
    ```json
    {
      "id": 1,
      "name": "Jane Smith"
    }
    ```
- Error Responses:
  - Status: 400 Bad Request
    - Body:
      ```json
      {
        "error": "Invalid request body"
      }
      ```
  - Status: 404 Not Found
    - Body:
      ```json
      {
        "error": "Person not found"
      }
      ```
  - Status: 500 Internal Server Error
    - Body:
      ```json
      {
        "error": "Failed to update person"
      }
      ```

### Delete a Person

- URL: `/api/person/delete.php?id=<person_id>`
- Method: DELETE
- Success Response:
  - Status: 204 No Content
- Error Responses:
  - Status: 404 Not Found
    - Body:
      ```json
      {
        "error": "Person not found"
      }
      ```
  - Status: 500 Internal Server Error
    - Body:
      ```json
      {
        "error": "Failed to delete person"
      }
      ```

## Sample Usage

### Create a Person

```
POST /api/person/create.php
Content-Type: application/json

{
  "name": "John Doe"
}
```

### Get a Person

```
GET /api/person/read.php?id=1
```

### Update a Person

```
PUT /api/person/update.php?id=1
Content-Type: application/json

{
  "name": "Jane Smith"
}
```

### Delete a Person

```
DELETE /api/person/delete.php?id=1
```

## Known Limitations and Assumptions

- The API assumes a valid database connection and proper configuration of the database credentials in `config.php`.
- The API assumes that the person records are stored in a MySQL database and follows a specific table structure.
- The API does not include authentication or authorization mechanisms. It is recommended to implement them based on your specific requirements.

## Local Setup and Deployment

To set up and deploy the API locally or on a server, follow these instructions:

1. Clone the repository: `git clone https://github.com/Jacktone-wambui/hngx-stagetwo-purephp`
2. Navigate to the project directory: `cd hngx-stagetwo-purephp`
3. Configure the database connection in `config.php`.
4. Import the database schema using the `hngxtwo.sql` file.
5. Start your web server and configure it to point to the project's directory.
6. Access the API through the appropriate URL (e.g.,http://localhost/api).

