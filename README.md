## Task Management System
-  Develop a RESTful API for a Task Management System.
-  Implement user authentication endpoints using seeded system actors with sanctum tokens.
-  Create CRUD endpoints for tasks including filtering, dependencies, and detailed retrieval.
-  Add role-based authorization where managers handle assignments and users update statuses.
-  Ensure task completion logic prevents finishing tasks until all dependencies are completed.

## Installation

Follow these steps to get the project up and running locally:

### 1. Clone the Repository

```bash
git clone https://github.com/abdelrahmanfathy99/task-management.git
cd task-management
```

### 2. Install Dependencies

Make sure you have [Composer](https://getcomposer.org/) installed. Then run:

```bash
composer install
```

### 3. Copy the Environment File

```bash
cp .env.example .env
```

### 4. Generate Application Key

```bash
php artisan key:generate
```

### 5. Configure Environment

Open the `.env` file and update the following according to your setup:

* `DB_CONNECTION`
* `DB_HOST`
* `DB_PORT`
* `DB_DATABASE`
* `DB_USERNAME`
* `DB_PASSWORD`

### 6. Run Migrations and Seed Database (Optional)

```bash
php artisan migrate
php artisan db:seed
```

### 7. Serve the Application

```bash
php artisan serve
```

### 8. Additional Notes

* Make sure PHP (>= 8.3), MySQL (>= 8.0),  and Composer are installed.
* Check your storage and bootstrap cache permissions:

```bash
chmod -R 775 storage bootstrap/cache
```

## Postman Collection

You can import the Postman collection for this project using the following link: [Postman collection](https://github.com/abdelrahmanfathy99/task-management/tree/main/app/Http/postman/collections/task-management.json)

## ERD for the DB

The database ERD diagram has been generated using [dbdiagram.io](https://dbdiagram.io) based on the project schema.

You can see The ERD of the database using the following link: [ERD Link](https://github.com/abdelrahmanfathy99/task-management/tree/main/public/task-management-erd.png)

## Using Docker

You can run the Task Management System using Docker and Docker Compose. This allows you to avoid installing PHP, MySQL, and other dependencies on your local machine.

### Build and Start Containers

Make sure you have [Docker](https://docs.docker.com/get-docker/) installed. Then run:

```bash
docker compose up -d --build