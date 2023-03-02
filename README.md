<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <title>Laravel Blog REST API</title>
  </head>
  <body>
    <h1>Laravel Blog REST API</h1>
    <p>This project is a demonstration of a RESTful API built using the Laravel PHP framework. 
    The API provides basic functionality for a blog, including creating, reading, updating, and deleting blog posts.</p>
    <h2>Installation</h2>
    <ol>
      <li>Clone the repository to your local machine.</li>
      <li>Install the required dependencies by running <code>composer install</code> in the project root directory.</li>
      <li>Create a new database for the project and update the 
        <code>DB_DATABASE</code>, 
        <code>DB_USERNAME</code>, and 
        <code>DB_PASSWORD</code> variables in the <code>.env</code> file with your database credentials.</li>
      <li>Run <code>php artisan migrate</code> to create the necessary database tables.</li>
      <li>Run <code>php artisan db:seed</code> to populate the database with some sample data (optional).</li>
      <li>Start the development server by running <code>php artisan serve</code>.</li>
    </ol>
    <h2>API Documentation</h2>
    <p>The API provides the following endpoints:</p>
    <ul>
      <li><code>GET /api/articles</code>: Retrieves a list of all blog posts.</li>
      <li><code>GET /api/articles/{id}</code>: Retrieves a single blog post by ID.</li>
      <li><code>POST /api/articles</code>: Creates a new blog post.</li>
      <li><code>PUT /api/articles/{id}</code>: Updates an existing blog post by ID.</li>
      <li><code>PATCH /api/articles/{id}</code>: Updates a part of an existing blog post by ID.</li>
      <li><code>DELETE /api/articles/{id}</code>: Deletes a blog post by ID.</li>
    </ul> 
  </body>
</html>
