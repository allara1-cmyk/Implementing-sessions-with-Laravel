Perfecto ✅ Aquí tienes el **README.md completo** en versión institucional **sin emojis**, listo para copiar o guardar en tu repositorio:

---

```markdown
# UNIVERSIDAD DE LAS FUERZAS ARMADAS ESPE  
### Carrera: Ingeniería en Tecnologías de la Información  
### Asignatura: Desarrollo Web  
### Nombre: LARA ANDERSON  
### Fecha: 2025  
---

## PROYECTO FINAL – SISTEMA WEB CON LARAVEL, REACT Y DOCKER

### Descripción General

El presente proyecto tiene como propósito desarrollar un sistema web moderno que integre un backend construido con Laravel y un frontend dinámico con React (usando Inertia.js).  
Se implementa un entorno de base de datos MySQL mediante Docker, garantizando portabilidad, modularidad y un flujo de trabajo profesional.

El sistema incluye autenticación con Laravel Fortify, vistas reactivas y una estructura de carpetas limpia para mantener la separación entre lógica de negocio, vistas y configuración del entorno.

---

## Objetivo General
Diseñar e implementar un sistema web modular con Laravel, React y Docker que permita gestionar usuarios y autenticación, conectándose a una base de datos MySQL de forma automatizada.

### Objetivos Específicos
1. Configurar un entorno de desarrollo basado en Laravel y React.  
2. Integrar autenticación mediante Laravel Fortify.  
3. Implementar una base de datos en contenedor Docker para pruebas locales.

---

## Estructura Final del Proyecto

```

proyecto-final/
├── app/                     # Lógica del backend (controladores, modelos, etc.)
├── bootstrap/
├── config/
├── database/
│   ├── migrations/          # Migraciones de tablas
│   ├── seeders/             # Datos iniciales
│   └── Dockerfile           # Imagen personalizada de MySQL
├── public/                  # Archivos públicos (index.php, imágenes, etc.)
├── resources/
│   ├── js/                  # Archivos React (componentes, vistas)
│   ├── css/                 # Hojas de estilo
│   └── views/               # Plantillas Blade
├── routes/
│   ├── web.php              # Rutas web
│   └── api.php              # Rutas API
├── docker-compose.yml       # Configuración de contenedores (Laravel + MySQL)
├── Dockerfile               # Imagen del backend Laravel
├── package.json             # Dependencias de frontend (React, Inertia)
├── composer.json            # Dependencias PHP/Laravel
└── README.md

````

---

## Requisitos Previos

Antes de iniciar, asegúrate de tener instalado:

- Node.js (v18 o superior)
- Composer
- Docker Desktop
- PHP 8.2 o superior

---

## Instalación del Proyecto

### 1. Clonar el repositorio
```bash
git clone https://github.com/usuario/proyecto-final.git
cd proyecto-final
````

### 2. Instalar dependencias de Laravel

```bash
composer install
```

### 3. Instalar dependencias de React

```bash
npm install
```

### 4. Configurar el archivo `.env`

```bash
cp .env.example .env
```

Editar los datos de conexión a la base de datos:

```
DB_CONNECTION=mysql
DB_HOST=mysql
DB_PORT=3306
DB_DATABASE=laravel_db
DB_USERNAME=root
DB_PASSWORD=123456
```

### 5. Generar clave de aplicación

```bash
php artisan key:generate
```

---

## Docker – Entorno de Base de Datos

### Archivo `database/Dockerfile`

```dockerfile
FROM mysql:8.0
ENV MYSQL_ROOT_PASSWORD=123456
ENV MYSQL_DATABASE=laravel_db
EXPOSE 3306
```

### Archivo `docker-compose.yml`

```yaml
version: '3.8'

services:
  app:
    build: .
    container_name: laravel_app
    ports:
      - "8000:8000"
    volumes:
      - .:/var/www/html
    depends_on:
      - mysql
    command: php artisan serve --host=0.0.0.0 --port=8000

  mysql:
    build:
      context: ./database
      dockerfile: Dockerfile
    container_name: mysql_db
    restart: always
    ports:
      - "3307:3306"
    environment:
      MYSQL_ROOT_PASSWORD: 123456
      MYSQL_DATABASE: laravel_db
    volumes:
      - db_data:/var/lib/mysql

volumes:
  db_data:
```

---

## Ejecución del Proyecto

### Opción 1 – Sin Docker

```bash
php artisan serve
npm run dev
```

### Opción 2 – Con Docker

```bash
docker compose up --build
```

Abrir en el navegador:

```
http://127.0.0.1:8000
```

---

## Migraciones y Datos Iniciales

Crear las tablas:

```bash
php artisan migrate
```

Insertar datos iniciales:

```bash
php artisan db:seed
```

---

## Principales Funcionalidades

* Autenticación segura con Laravel Fortify
* Interfaz dinámica en React + Inertia.js
* Base de datos MySQL en Docker
* Estructura modular y mantenible
* Comunicación fluida entre frontend y backend

---

## Conclusiones

1. El uso combinado de Laravel y React permite desarrollar aplicaciones modernas, escalables y eficientes.
2. La integración de Docker simplifica el despliegue y configuración de la base de datos, eliminando dependencias locales.
3. Esta arquitectura modular facilita la expansión futura del proyecto, permitiendo incorporar nuevos módulos o servicios con facilidad.

---

## Comandos de Uso Frecuente

| Acción                        | Comando                |
| ----------------------------- | ---------------------- |
| Iniciar servidor Laravel      | `php artisan serve`    |
| Compilar frontend React       | `npm run dev`          |
| Ejecutar migraciones          | `php artisan migrate`  |
| Construir contenedores Docker | `docker compose build` |
| Iniciar entorno Docker        | `docker compose up -d` |
| Detener entorno Docker        | `docker compose down`  |

---

## Recomendaciones

1. Mantener las dependencias actualizadas usando `composer update` y `npm update`.
2. Evitar cambios directos en producción; usar entorno `.env` separado.
3. Documentar cada nueva funcionalidad implementada.

---

## Autor

**LARA ANDERSON**
Estudiante de Ingeniería en Tecnologías de la Información
Universidad de las Fuerzas Armadas – ESPE
Correo: [andersonllr4@gmail.com](mailto:andersonllr4@gmail.com)
Año 2025

```

---

¿Deseas que te genere este archivo como `README.md` descargable para subirlo directamente a GitHub? Puedo crearlo y adjuntarlo ahora mismo.
```
