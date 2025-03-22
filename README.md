# Laravel Admin Dashboard

## Introduction

This is a **Laravel-based Admin Dashboard** designed as a foundation for building applications on top of it. It provides essential admin functionalities such as user management, roles & permissions, dashboard analytics, and more.

## Features

- 🔒 **Authentication & Authorization** (Login, Registration, Password Reset)
- 🛠 **Role-Based Access Control (RBAC)** using Spatie Laravel Permissions
- 📊 **Admin Dashboard with Analytics**
- 🏗 **Modular and Scalable Architecture**
- 📂 **CRUD Operations for Users, Roles, and Settings**
- 📬 **Email Notifications & Alerts**
- 📦 **RESTful API Support**
- 🎨 **Blade Templating with Bootstrap/Tailwind Support**

## Requirements

Make sure your system meets the following requirements before installation:

- PHP >= 8.0
- Composer
- Laravel >= 9.x
- MySQL or PostgreSQL Database
- Node.js & npm (for frontend assets)

## Installation

### Step 1: Clone the Repository

```sh
git clone https://github.com/your-repo/laravel-admin-dashboard.git
cd laravel-admin-dashboard
```

### Step 2: Install Dependencies

```sh
composer install
npm install && npm run dev
```

### Step 3: Configure Environment Variables

Copy the `.env.example` file and configure the database:

```sh
cp .env.example .env
```

Update `.env` file with your database credentials:

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=your_database
DB_USERNAME=your_username
DB_PASSWORD=your_password
```

### Step 4: Generate Application Key

```sh
php artisan key:generate
```

### Step 5: Run Database Migrations & Seeders

```sh
php artisan migrate --seed
```

This will create tables and seed default roles & admin users.

### Step 6: Start the Application

```sh
php artisan serve
```

Visit `http://127.0.0.1:8000` in your browser.
