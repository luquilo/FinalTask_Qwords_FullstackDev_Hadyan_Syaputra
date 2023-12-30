# Laravel Tailwind Project

This is a Laravel project that utilizes Tailwind CSS for styling. Follow the steps below to set up and run the application.

## Prerequisites

Make sure you have the following installed on your machine:

-   [Composer](https://getcomposer.org/)
-   [Node.js](https://nodejs.org/)
-   [npm](https://www.npmjs.com/) (comes with Node.js)
-   [PHP](https://www.php.net/)

## Getting Started

1. Clone the repository:

    ```bash
    git clone <repository_url>
    cd <project_directory>
    ```

2. Install Laravel dependencies:

    ```bash
    composer install
    ```

3. Install Node.js dependencies:

    ```bash
    npm install
    ```

## Setting up Tailwind CSS

4. Generate Tailwind CSS configuration files:

    ```bash
    npx tailwindcss init -p
    ```

5. Configure template paths in `tailwind.config.js`:

    ```javascript
    // tailwind.config.js

    module.exports = {
        content: [
            "./resources/**/*.blade.php",
            "./resources/**/*.js",
            "./resources/**/*.vue",
        ],
        theme: {
            extend: {},
        },
        plugins: [],
    };
    ```

6. Add Tailwind directives to your CSS in `./resources/css/app.css`:

    ```css
    /* ./resources/css/app.css */

    @tailwind base;
    @tailwind components;
    @tailwind utilities;
    ```

## Build and Run

7. Run the build process:

    ```bash
    npm run dev
    ```

8. Start the Laravel development server:

    ```bash
    php artisan serve
    ```

9. Open your browser and navigate to [http://localhost:8000](http://localhost:8000).

## Additional Commands

-   To watch for changes and automatically recompile assets during development:

    ```bash
    npm run watch
    ```

Now you're ready to start developing your Laravel application with Tailwind CSS! Feel free to customize the application and explore the power of Laravel and Tailwind together.
