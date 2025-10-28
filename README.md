# Práctica Laravel - API Empleados

API REST para registrar y listar empleados usando Laravel 12 + MySQL.

## Requisitos
- PHP 8.2+
- Composer
- MySQL
- Laravel 12

## Instalación

1. Clona el repositorio:
   ```bash
   git clone https://github.com/vallejosroberto-uab/VallejosRoberto-BackendExamen2.git


 2.  Entra al proyecto:
cd practica-backend-laravel

3. Instala dependencias:
composer install

4. Copia .env.example a .env:
cp .env.example .env

5. Genera clave de aplicación:
php artisan key:generate

6. Configura la base de datos en .env:
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=empleados_db
DB_USERNAME=root
DB_PASSWORD=

7. Ejecuta migraciones y seeders:
php artisan migrate --seed

8. Inicia el servidor:
php artisan serve


API Endpoints
Método,URL,Descripción
GET,/api/empleados,Lista todos los empleados
POST,/api/empleados,Crea un nuevo empleado

Ejemplo POST (JSON)
{
    "nombre": "Ana",
    "apellido": "Gómez",
    "correo": "ana@example.com",
    "salario": 1800.00
}


Pruebas

Usa Postman o curl para probar los endpoints.
El seeder crea 10 empleados de ejemplo.

Estructura de la base de datos
Tabla: empleados

id (PK, AI)
nombre (string, requerido)
apellido (string, requerido)
correo (string, único, requerido)
salario (decimal 10,2, requerido)
created_at, updated_at

