## About

This Project show cases a contact form made in laravel. It uses blade template engine which is default to laravel. It Uses
Materialize CSS Framework for the frontend. This application is responsive, meaning it will scale down and up to any device
it is viewed upon.

## Steps to run the project

**Composer must be installed to run this project**

1. Clone this repository
2. Run composer install
3. Configure your .env file (have to rename .env.example to .env)
4. Setup correct credentials for mysql connection in the .env file (mainly the DB_DATABSE for database name, DB_USERNAME and DB_PASSWORD)
5. Run **php artisan key:generate** in terminal
6. Run **php artisan migrate** in terminal
7. Run **php artisan serve** in terminal
8. Browse to the location specified after step 7