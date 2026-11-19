Mini E-Commerce API

About the Project:

This project is a simple E-Commerce API developed using PHP and MySQL.

The project allows users to register and log in, view products, and create orders. It also has an admin role that can manage products and update order statuses.

Technologies Used:

PHP
MySQL
MariaDB
Docker
Docker Compose
Composer
Firebase JWT

I chose PHP because I am learning backend development using PHP. I used MySQL to store users, products, and orders data. I also used Docker to run the project and its database in separate containers.

*Project Features

Authentication

Register a new user.
Login using email and password.
Use JWT token for authentication.

Products

View all products.
View one product by ID.
Add a new product.
Update product information.
Delete a product.

Orders

Create a new order.
View my orders.
View all orders as an admin.
Update order status as an admin.
View order details.
Cancel a pending order.

How to Run the Project

This project can be run using Docker and Docker Compose.

Install Docker Desktop and make sure it is running.
Open the project folder in VS Code.
Open the terminal inside the project folder.
Run this command to build and start the containers:

docker compose up --build -d

After the containers start, open the project using this link:

http://localhost:8080

Stop the Project:

To stop the containers, run:
docker compose down
The database data is stored in a Docker volume named db_data.

API Testing:

I used REST Client in VS Code to test the API requests and check the responses.

*API Endpoints

Authentication:
POST /api/auth/register — Register a new user.
POST /api/auth/login — Login.

Products:
- GET '/api/products/list.php' — Get all products.
- GET '/api/products/{id}' — Get one product by ID.
- POST '/api/products/create.php' — Add a new product.
- PUT / PATCH '/api/products/{id}' — Update product information.
- DELETE '/api/products/{id}' — Delete a product

Orders:
POST /api/orders/create.php — Create a new order.
GET /api/orders/my_orders.php — Get the logged-in user's orders.
GET /api/orders/details.php?id={id} — Get order details.
PATCH /api/orders/cancel.php — Cancel an order.
GET /api/admin/orders.php — Get all orders (Admin only).
PATCH /api/admin/orders/{id}/status — Update order status (Admin only)

Authentication Token

Some API endpoints require authentication.
After logging in, the user receives a JWT token.
The token must be sent in the Authorization header:

Authorization: Bearer YOUR_TOKEN

Admin endpoints require a token belonging to an admin user.

