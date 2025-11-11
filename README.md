````markdown
# ARMED FORCES UNIVERSITY ESPE  
### Program: Information Technology Engineering  
### Subject: Web Development  
### Name: LARA ANDERSON  
### Date: 2025  
---

## WEB SYSTEM WITH LARAVEL, REACT, AND DOCKER

### General Description

This project aims to develop a modern web system that integrates a backend built with Laravel and a dynamic frontend using React (via Inertia.js).  
A MySQL database environment is implemented through Docker, ensuring portability, modularity, and a professional workflow.

The system includes authentication with Laravel Fortify, reactive views, and a clean folder structure to maintain the separation between business logic, views, and environment configuration.

---

## General Objective
Design and implement a modular web system with Laravel, React, and Docker that allows user management and authentication, connecting automatically to a MySQL database.

### Specific Objectives
1. Configure a development environment based on Laravel and React.  
2. Integrate authentication using Laravel Fortify.  
3. Implement a database in a Docker container for local testing.

---

## Final Project Structure

---

## Prerequisites

Before starting, make sure you have installed:

- Node.js (v18 or higher)
- Composer
- Docker Desktop
- PHP 8.2 or higher

---

## Project Installation

### 1. Clone the repository
```bash
git clone https://github.com/usuario/proyecto-final.git
cd proyecto-final
````

### 2. Install Laravel dependencies

```bash
composer install
```

### 3. Install React dependencies

```bash
npm install
```

---

## Project Execution

### Run simultaneously

```bash
php artisan serve
npm run dev
docker compose up --build
```

Open in the browser:

```
http://127.0.0.1:8000
```

---

## Migrations and Initial Data

Create the tables:

```bash
php artisan migrate
```

Insert initial data:

```bash
php artisan db:seed
```

---

## Main Features

* Secure authentication with Laravel Fortify
* Dynamic interface in React + Inertia.js
* MySQL database running in Docker
* Modular and maintainable structure
* Smooth communication between frontend and backend

---

## Frequently Used Commands

| Action                   | Command                |
| ------------------------ | ---------------------- |
| Start Laravel server     | `php artisan serve`    |
| Compile React frontend   | `npm run dev`          |
| Run migrations           | `php artisan migrate`  |
| Build Docker containers  | `docker compose build` |
| Start Docker environment | `docker compose up -d` |
| Stop Docker environment  | `docker compose down`  |

```
```
