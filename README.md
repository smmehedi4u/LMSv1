
# Library Management System


This is a Library Management System project built using Laravel with role-based access control for managing different user types. The system features two dashboards: one for regular users and another for administrators, allowing for different levels of access and functionality.




## Features

### User Dashboard
- Registration & Login: Users can register and log in to access their dashboard.
- View Available Books: Users can browse available books, view book details, and locate nearby libraries.
- Search Functionality: Users can search for specific books to find their location.
- Book Details: Each book’s details page displays the book name, author, and the library where it is available.
- Library Suggestions by Proximity: The system suggests nearby libraries based on the user’s location, allowing users to find the closest options.
- Location Sharing: Users can view library locations on Google Maps and share the location link with others.

### Admin Dashboard
- Full CRUD Operations: Admins can manage libraries, authors, and books with full create, read, update, and delete capabilities.
- Role-Based Access Control: The system enforces role-based access, allowing admins and regular users to have distinct levels of access and functionality.


## Technologies Used

- Frontend: HTML, CSS, Bootstrap
- Backend: Laravel Framework
- Database: MySQL

## Installation Guide

Follow these steps to set up the project on your local machine:

### Prerequisites

- PHP (>= 8.0)
- Composer
- MySQL
- Git




## Setup Instructions

 1. Clone the repository:

```bash
    git clone https://github.com/yourusername/library-management-system.git
```
2. Moved new Folder
```bash
    cd library-management-system
```

3. Install dependencies:

```bash
    composer install
```

4. Setup Environment: 

```bash
    cp .env.example .env
```

5. Open .env and configure the following:

```bash
    DB_DATABASE=your_database_name
    DB_USERNAME=your_username
    DB_PASSWORD=your_password
```

6. Generate application key:

```bash
    php artisan key:generate
```

7. Run migrations and seed the database:

This command will create the database tables and populate initial data using seeders.

```bash
    php artisan migrate --seed
```

8. Serve the application:

Start the Laravel development server.

```bash
    php artisan serve
```

9.Access the application:

Open your browser and visit http://localhost:8000.

## Usage

- Admin Dashboard: Log in as an admin to manage libraries, authors, and books.
- User Dashboard: Register and log in as a regular user to browse books, view nearby libraries, and see book details.




