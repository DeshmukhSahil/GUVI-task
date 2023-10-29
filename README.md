# Registration , Login and User management 

## Tech Stack

* HTML
* CSS
* JS
* PHP
* Redis
* MongoDB

## Description

This web application facilitates user registration, login, and profile updates. It employs a blend of HTML, CSS, JavaScript, and PHP for the frontend and backend. The MySQL database stores user data, and Redis, along with MongoDB, manages user sessions.

## Installation on localhost

1. **Clone or Download:**
   - Clone the repository or download the source code.

2. **Redis Set-up:**
   - Install Composer and Predis in the php folder of the project directory.
   - Run the following command in the php folder via the terminal:
     ```
     composer require Predis/Predis
     ```

3. **Install MongoDB/Client:**
   - Install MongoDB/MongoDB Composer by running:
     ```
     composer require MongoDB/MongoDB
     ```
   - Alternatively, enable MongoDB extension in configuration files.

4. **Create MySQL Database:**
   - Set up a MySQL database for user data.

5. **Update Database Credentials:**
   - Update database credentials accordingly and ensure successful integration between Redis, MongoDB, PHP, and MySQL.

6. **Run Localhost Server:**
   - Execute the following commands in the terminal:
     ```
     php -S localhost:8000
     ```
   - Make sure to navigate to the project directory.

## Project is not yet deployed

This project is currently not deployed. Please follow the instructions above to set it up on your localhost for testing and development purposes.