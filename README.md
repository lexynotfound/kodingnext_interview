# Kodingnext Interview Challenge - Backend

This repository contains the backend challenge for the Kodingnext interview. The backend is set up using MAMP for managing the server and database.

## Project Overview

This project includes a simple authentication system with a landing page, login, registration, and dashboard functionalities. Below are the details and screenshots of each part of the application.

### Landing Page

The landing page welcomes users and provides navigation to login or register.

![Landing Page](https://github.com/lexynotfound/kodingnext_interview/assets/36406297/1957ef9d-7b5f-472d-8960-f6d45b3762bb)

### Login Page

Users can log in to access the dashboard.

![Login Page](https://github.com/lexynotfound/kodingnext_interview/assets/36406297/3fc23bcb-5936-4c50-a349-2e1e6d4a2fab)

### Registration Page

New users can register for an account.

![Registration Page](https://github.com/lexynotfound/kodingnext_interview/assets/36406297/4c4a0351-8f89-4361-9393-7052c15c85bf)

### Dashboard

The dashboard displays a welcome message to logged-in users.

![Dashboard](https://github.com/lexynotfound/kodingnext_interview/assets/36406297/896075f9-cf21-4ece-b3c5-76c7c400de2c)

## Installation

1. **Clone the repository:**
   ```sh
   git clone https://github.com/lexynotfound/kodingnext_interview.git

2. **Change the directory repository:**
   ```sh
   cd kodingnext_interview

3. **Set up MAMP or XAMMPP:**
   ```sh
   Ensure MAMP or XAMPP is installed and running on your machine.
   Move the project files to the MAMP htdocs directory.

4. **Create Database :**
   ```sh
   CREATE TABLE users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL
   );

5. **Update the database configuration: :**
   ```sh
   <?php
      $host = 'localhost';
      $port = '8889'; // Adjust if necessary
      $db = 'kodingnext';
      $user = 'root';
      $pass = 'root'; // Default MAMP password
      $charset = 'utf8mb4';

      $dsn = "mysql:host=$host;port=$port;dbname=$db;charset=$charset";
      $options = [
          PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
          PDO::ATTR_EMULATE_PREPARES   => false,
      ];

   try {
       $pdo = new PDO($dsn, $user, $pass, $options);
   } catch (\PDOException $e) {
    throw new \PDOException($e->getMessage(), (int)$e->getCode());
   }
   ?>
6. **Starting MAMP OR XAMPP**
   ```sh
     Open MAMP or XAMPP and start the Apache and MySQL servers.

7. **Starting MAMP OR XAMPP**
   ```sh
     Open a web browser and navigate to `http://localhost/kodingnext:


    
