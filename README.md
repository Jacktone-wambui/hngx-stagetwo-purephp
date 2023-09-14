# API Documentation

This API provides endpoints for managing a person's data. It allows you to create, retrieve, update, and delete person records.

## Prerequisites

- PHP 
- MySQL 
- Web server

## UML LINK :
https://github.com/Jacktone-wambui/hngx-stagetwo-purephp/blob/master/Frame%201.png  

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

