# Library

This project is a library management system application that allows you to track and manage books, authors, and publishers. The application was developed using the Laravel PHP framework.

## Features

- Add new books, authors, and publishers
- Edit existing books, authors, and publishers
- Delete existing books, authors, and publishers
- Search to list books, authors, and publishers
- Track the available copies of books

## Installation

1. To clone this project onto your own computer, first copy the project cloning link from the GitHub page:

    ```
    git clone https://github.com/Emincmg/library.git
    ```

2. Once the cloning process is complete, go to the project directory:

    ```
    cd library
    ```

3. Copy the `.env.example` file to `.env`:

    ```
    cp .env.example .env
    ```

4. Then, generate a new `APP_KEY`:

    ```
    php artisan key:generate
    ```

5. Open the `.env` file and configure the database connection settings:

    ```
    DB_CONNECTION=mysql
    DB_HOST=127.0.0.1
    DB_PORT=3306
    DB_DATABASE=your_database_name
    DB_USERNAME=your_database_username
    DB_PASSWORD=your_database_password
    ```

6. Migrate the database tables and seed the database with initial data:

    ```
    php artisan migrate --seed
    ```

7. Finally, start the application by running the following command:

    ```
    php artisan serve
    ```

## Usage

Once the installation is complete and the application is running, you can access it by visiting `http://localhost:8000` in your web browser. From there, you can use the application to manage books, authors, and publishers.
