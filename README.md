<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

# Book Review App
Welcome to the Book Review App README! This application allows users to post comments, reviews, and ratings for various books on a scale of 1 to 5. The app is built using the Laravel framework, providing a seamless and user-friendly experience for managing and sharing thoughts about different books.

## Features

### Browsing Books
Users can browse a list of available books, view book details, and see existing reviews for each book.

### Adding Reviews
Logged-in users have the ability to write and post reviews for specific books. A review can include text commentary and a rating from 1 to 5.

### Rating System
The app employs a rating system to allow users to express their opinions more effectively. Ratings are aggregated to calculate an average rating for each book.

## Installation
1. Clone this repository to your local environment: git clone https://github.com/NatalieJoan/Laravel-Book-Review.git
2. Navigate to the project directory: cd book-review-app
3. Install PHP dependencies: composer install
4. Configure your .env file with database connection details and other settings.
5. Generate an application key: php artisan key:generate
6. Run database migrations and seed initial data: php artisan migrate --seed
7. Start the development server: php artisan serve
   
## Contributing

Thank you for considering contributing to the Laravel framework! The contribution guide can be found in the [Laravel documentation](https://laravel.com/docs/contributions).

## Code of Conduct

In order to ensure that the Laravel community is welcoming to all, please review and abide by the [Code of Conduct](https://laravel.com/docs/contributions#code-of-conduct).

## Security Vulnerabilities

If you discover a security vulnerability within Laravel, please send an e-mail to Taylor Otwell via [taylor@laravel.com](mailto:taylor@laravel.com). All security vulnerabilities will be promptly addressed.

## License

The Laravel framework is open-sourced software licensed under the [MIT license](https://opensource.org/licenses/MIT).
