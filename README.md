

## Simple blog website with login using laravel framework


## Technologies used:

- Laravel, PHP, Blade, HTML, CSS, Apache, MySQL


### Technologies needed to run the application

Before you can start, you'll need to have the following installed on your system:

* **Composer:** The PHP dependency manager. Download it from [https://getcomposer.org/](https://getcomposer.org/).
* **PHP:** Version 7.4 or higher. You can check your PHP version by running `php -v` in your terminal.
* **MySQL** Create a database called laravel-blog.

.

### Downloading and Setting Up

1. **Clone the repository:**

git clone https://github.com/[your-username]/[project-name].git


2. **Navigate to the project directory:**

cd [laravel-blog]


3. **Install dependencies:**

composer install


4. **Copy environment file:**

cp .env.example .env


5. **Configure environment variables:**
- **Database Credentials:** Fill in your database information, including hostname, username, password, and database name, in the `.env` file.
- **App Key:** If not already set, you can generate a new app key using:

php artisan key:generate


6. **Run database migrations:**

php artisan migrate


### Running the Project

1. **Start the development server:**

php artisan serve


2. **Access the application:** Open your browser and navigate to `http://localhost:8000`.

### Additional Notes

* **Frontend Assets:** If you need to compile frontend assets, follow the instructions provided in the project's `package.json` file.
* **Testing:** This project may include tests. You can run them using:

php artisan test

