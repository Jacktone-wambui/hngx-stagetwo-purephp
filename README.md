# API Documentation

This API provides endpoints for managing a person's data. It allows you to create, retrieve, update, and delete person records.

## Prerequisites

- PHP 
- MySQL 
- Web server

## Setup

1. Clone the repository:

   ```bash
   git clone https://github.com/Jacktone-wambui/hngx-stagetwo-purephp
   ```

2. Navigate to the project directory:

   ````bash
   cd hngx-stagetwo-purephp
   ```

3. Create a new database and import the `hngxtwo.sql` file included in the project.

4. Configure the database connection:

   - Open the `config.php` file.
   - Update the `$servername`, `$username`, `$password`, and `$dbname` variables with your database credentials.

5. Start the API:

   - Ensure that your web server is running and configured to point to the project's directory.
   - Access the API through the appropriate URL (e.g., `http://localhost/api`).

## API Endpoints

The API provides the following endpoints:

### Create a person

- URL: `/api/person/create.php`
- Method: POST
- Headers:
  - Content-Type: application/json
- Request Body:
  ````json
  {
    "name": "John Doe"
  }
  ```
- Response:
  - Status: 201 Created
  - Body:
    ```json
    {
      "id": 1,
      "name": "John Doe"
    }
    ```

### Get a person

- URL: `/api/person/read.php?id=<person_id>`
- Method: GET
- Response:
  - Status: 200 OK
  - Body:
    ```json
    {
      "id": 1,
      "name": "John Doe"
    }
    ```

### Update a person

- URL: `/api/person/update.php?id=<person_id>`
- Method: PUT
- Headers:
  - Content-Type: application/json
- Request Body:
  ````json
  {
    "name": "Jane Smith"
  }
  ```
- Response:
  - Status: 200 OK
  - Body:
    ```json
    {
      "id": 1,
      "name": "Jane Smith"
    }
    ```

### Delete a person

- URL: `/api/person/delete.php?id=<person_id>`
- Method: DELETE
- Response:
  - Status: 204 No Content

## Error Handling

- If an error occurs in any API request, the response will include an appropriate error message and status code.

## Authentication and Authorization

- This API does not include authentication or authorization mechanisms. It is recommended to implement them based on your specific requirements.

## Contributing

1. Fork the repository.
2. Create your feature branch: `git checkout -b my-new-feature`.
3. Commit your changes: `git commit -am 'Add some feature'`.
4. Push the branch to your fork: `git push origin my-new-feature`.
5. Submit a pull request.

