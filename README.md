# Backend Laravel - Examen 2

## Descripción
API RESTful desarrollada en Laravel 11 que gestiona una tabla de empleados (CRUD básico). 
Incluye seeder con 10 registros iniciales, migración con campos requeridos y rutas API para GET y POST.
Diseñada para ser consumida por el frontend Angular en http://localhost:4200.

## Requisitos
- PHP 8.2 o superior
- Composer 2.7+
- Laravel 11
- Base de datos MySQL o SQLite (configurada en .env)

## Estructura de archivos clave
app/
├── Models/
│   └── Empleado.php        → Modelo Eloquent con fillable y reglas
database/
├── migrations/
│   └── 2025_10_28_000000_create_empleados_table.php → Migración con id, nombre, apellido, correo, salario, timestamps
├── seeders/
│   └── EmpleadoSeeder.php  → Inserta 10 empleados con datos realistas
routes/
└── api.php                 → Rutas: GET /api/empleados, POST /api/empleados
.env                        → Configuración de base de datos

## Instalación
1. Clona el repositorio:
   git clone https://github.com/vallejosroberto-uab/VallejosRoberto-BackendExamen2.git
2. Entra al directorio:
   cd VallejosRoberto-BackendExamen2
3. Instala dependencias:
   composer install
4. Copia el archivo de entorno:
   cp .env.example .env
5. Genera la clave de la aplicación:
   php artisan key:generate
6. Configura la base de datos en .env:
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=examen2
   DB_USERNAME=root
   DB_PASSWORD=

## Migración y Seeder
1. Ejecuta las migraciones:
   php artisan migrate
2. Ejecuta el seeder (10 empleados):
   php artisan db:seed --class=EmpleadoSeeder

## Rutas API
- GET    /api/empleados        → Lista todos los empleados (JSON)
- POST   /api/empleados        → Crea un nuevo empleado
  Campos requeridos: nombre, apellido, correo, salario
  Ejemplo de cuerpo:
  {
    "nombre": "Ana",
    "apellido": "Gómez",
    "correo": "ana@example.com",
    "salario": 3500
  }

## Ejecución
1. Inicia el servidor Laravel:
   php artisan serve
2. La API estará disponible en:
   http://127.0.0.1:8000/api/empleados

## Validación
- Todos los campos son obligatorios.
- El correo debe ser único.
- El salario debe ser numérico y mayor a 0.
- Respuestas JSON con errores claros si falla la validación.

## Modelo Empleado.php
protected $fillable = ['nombre', 'apellido', 'correo', 'salario'];
Reglas de validación en el controlador.

## Controlador (implícito en rutas con Resource)
Usa Empleado::all() y Empleado::create($request->validate([...]))

## Comandos Git (historial recomendado)
git add .
git commit -m "feat(api): migración, modelo, seeder y rutas CRUD empleados"
git push origin dev
git checkout main
git merge dev -m "merge: integrar dev en master para versión final"
git push origin main

## Notas importantes
- No se usa autenticación (API pública para examen).
- CORS configurado por defecto en Laravel 11 (permite localhost:4200).
- Base de datos se crea automáticamente con migrate.
- Seeder usa Faker para datos realistas.
- Respuestas en formato JSON estándar.

## Prueba rápida con curl
curl http://127.0.0.1:8000/api/empleados
curl -X POST http://127.0.0.1:8000/api/empleados \
     -H "Content-Type: application/json" \
     -d '{"nombre":"Luis","apellido":"Pérez","correo":"luis@example.com","salario":4200}'

## Entrega
El backend está listo para producción. 
Ejecuta php artisan serve y conecta el frontend Angular.
¡API 100% funcional y documentada!