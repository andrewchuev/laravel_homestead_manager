# Laravel Homestead Configuration Manager

### A simple Laravel-based web application to manage the Homestead.yaml configuration file for Laravel Homestead.
Features

- List Sites: View all the sites configured in the Homestead.yaml file in a tabular format.
- Add Site: Easily add a new site configuration to the Homestead.yaml file.
- Edit Site: Modify existing site configurations.
- Delete Site: Remove a site configuration from the Homestead.yaml file.

## Installation

Clone the Repository:
    git clone https://github.com/andrewchuev/laravel_homestead_manager

Install Dependencies:
Navigate to the project directory and install the required dependencies:

    composer install

## Set Up Environment:
Copy .env.example to .env and configure your application settings, especially the path to your Homestead.yaml.

## Run the Application:
Start the Laravel development server:
    php artisan serve

## Usage
Navigate to the application URL (e.g., http://localhost:8000/config).
You'll see a list of all sites configured in the Homestead.yaml file.
Use the "Add", "Edit", and "Delete" options to manage the configurations.

## Dependencies
  
- Symfony/Yaml: Symfony component for YAML file parsing and dumping.

## Contributing

Pull requests are welcome. For major changes, please open an issue first to discuss what you would like to change.

## License

This project is licensed under the MIT License.
