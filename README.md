# Laravel API Prueba 

API RESTful para gestión de estudiantes.

## Requisitos

- Laravel 12.14.1
- PHP >= 8.1
- Composer
- SQLite (incluido por defecto en Laravel, motor utilizado para el desarrollo y test de la API)
- MySQL o MariaDB (opcional)

## Instalación

1. **Clona el repositorio:**
   ```bash
   git clone https://github.com/amatosesg/laravel-api-prueba.git
   cd laravel-api-prueba
   ```

2. **Instala dependencias de PHP:**
   ```bash
   composer install
   ```

3. **Copia el archivo de entorno y configura tus variables:**
   ```bash
   cp .env.example .env
   ```
   Por defecto, el proyecto está preparado para usar **SQLite**. Para ello:
   - Asegurate de que en el archivo `.env` este la configuración de la siguiente forma:
     ```
     DB_CONNECTION=sqlite
     # DB_HOST=127.0.0.1
     # DB_PORT=3306
     # DB_DATABASE=laravel
     # DB_USERNAME=root
     # DB_PASSWORD=
     ```
   - Crea el archivo de base de datos vacío:

     **En Linux:**
     ```bash
     touch database/database.sqlite
     ```

     **En Windows (PowerShell):**
     ```powershell
     New-Item -ItemType File database/database.sqlite
     ```

     **En Windows (CMD):**
     ```cmd
     type nul > database\database.sqlite
     ```

   Si prefieres usar MySQL, configura las variables indicadas anteriormente como corresponda.

4. **Genera la clave de la aplicación:**
   ```bash
   php artisan key:generate
   ```

5. **Ejecuta las migraciones:**
   ```bash
   php artisan migrate
   ```

6. **Llenar la base de datos con datos de ejemplo:**
   ```bash
   php artisan db:seed
   ```
   Esto creará estudiantes de ejemplo para que se pueda probar la API y/o la documentación de Postman.

7. **Inicia el servidor de desarrollo:**
   ```bash
   php artisan serve
   ```
   La API estará disponible en `http://localhost:8000/api`.
   *Revisa el puerto por si fuese diferente.*

## Endpoints principales

- `GET /api/estudiantes` — Listar todos los estudiantes
- `GET /api/estudiantes/{id}` — Ver un estudiante
- `POST /api/estudiantes` — Crear un estudiante
- `PUT /api/estudiantes/{id}` — Actualizar un estudiante (total)
- `PATCH /api/estudiantes/{id}` — Actualizar un estudiante (parcial)
- `DELETE /api/estudiantes/{id}` — Eliminar un estudiante

Para más información revisa la documentación realizada en Postman.  
*(Incluye aquí el enlace o archivo si lo tienes)*

## Notas

- No es necesario configurar autenticación para usar la API.

---