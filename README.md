# 🏥 Hospital & Patient Management System (Laravel)
This project is a simple CRUD web application built using Laravel 12, designed to manage data for Hospitals and their associated Patients. It features:

User authentication (login/logout)

CRUD operations for hospitals and patients

Relational data: Each patient belongs to a hospital

AJAX-based delete and filtering functionality

Form Request validation and Service layer structure

# Modular and clean MVC architecture

📁 Features
✅ Authentication
Login system for accessing the admin dashboard

# 🏥 Hospital Module
Add, update, delete, and list hospitals

Fields: ID, Hospital Name, Address, Email, Phone

Delete functionality via AJAX

# 👨‍⚕️ Patient Module
Add, update, delete, and list patients

Fields: ID, Patient Name, Address, Phone, Hospital ID

Dropdown filter to show patients based on selected hospital (AJAX)

Relational data displayed with hospital name

# 📦 Technologies Used
Laravel 12

Blade Templates

MySQL 

Bootstrap 

JavaScript (vanilla) for AJAX

# 🚀 Getting Started
🧱 Requirements
PHP >= 8.1

Composer

MySQL/MariaDB

Node.js (for frontend assets, optional)

# ⚙️ Installation
Clone the repository:

git clone https://github.com/rizkitaufiq/laravel_rizkitaufiq.git
cd laravel_rizkitaufiq
Install dependencies:

composer install
Copy the .env file and set DB credentials:

cp .env.example .env
Generate the application key:

php artisan key:generate
Run migrations and seed the database:

php artisan migrate --seed
Serve the application:

php artisan serve