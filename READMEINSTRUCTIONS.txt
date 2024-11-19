

README
Project Overview
This project involves creating an automated test script using Laravel Dusk for a web application developed with HTML, CSS, JavaScript, PHP, and Laravel. 

Tools Used: 

HTML: For structuring the web pages.

CSS: For styling the web pages.

JavaScript: For adding interactivity to the web pages.

PHP: For server-side scripting.

Laravel: A PHP framework used for building the web application.

Laravel Dusk: A browser automation and testing tool for Laravel applications.

GIT: For version control and collaboration.

Thought and Design Process

Understanding Requirements: The first step was to understand the requirements of the web application and the specific functionalities that needed to be tested.

Setting Up the Environment: The development environment was set up with Laravel and Laravel Dusk. This involved installing Laravel via Composer and setting up Laravel Dusk for browser automation.

Writing Test Cases: Test cases were written to cover various functionalities of the web application. These test cases were designed to simulate user interactions and verify that the application behaves as expected.

Version Control: GIT was used to manage the codebase and track changes. The repository was hosted on GitHub for easy access and collaboration.

Instructions to Run the Script

1. git clone <repository-link>

2. cd <project-directory>

3. composer install

4. cp .env.example .env
php artisan key:generate

5.npm install
	
6. npm run dev

*if error* 
npm i vue-loader then npm run dev again

7. composer require --dev laravel/dusk
php artisan dusk:install

8. php artisan dusk

