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

## Probar la API con Postman

Se incluye una colección de Postman para facilitar las pruebas de la API.

1. **Descarga la colección:**
   - Ve a la carpeta [`postman/`](postman/) de este repositorio.
   - Descarga el archivo `Laravel API Prueba.postman_collection.json`.

2. **Importa la colección en Postman:**
   - Abre Postman.
   - Haz clic en **Importar** (botón "Import" arriba a la izquierda).
   - Selecciona el archivo descargado.

3. **Prueba los endpoints:**
   - Asegúrate de que el servidor de Laravel esté en ejecución (`php artisan serve`).
   - Modifica la variable de entorno o la URL base en Postman si es necesario (por defecto: `http://localhost:8000/api`).
   - Ejecuta las peticiones incluidas en la colección.


## Notas

- No es necesario configurar autenticación para usar la API.
- La parte teórica de la prueba se ha enviado junto con el enlace a este repositorio por correo electrónico. Además, también se encuentra adjunta en este repositorio para mayor comodidad. Se puede encontrar en la carpeta [`docs/`](docs/).

---