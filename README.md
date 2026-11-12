# App de Alumnos — Laravel 12 + MySQL

Aplicación web desarrollada en Laravel 12 con MySQL y TailwindCSS (Laravel Breeze) para la gestión de usuarios con roles simples (**Docente/Administrador** y **Alumno**).

## Características Principales

* **Autenticación y Registro:** Sistema de inicio de sesión y registro con carga obligatoria de foto de perfil.
* **Control de Roles (Policies):**
  * **Administrador (Docente):** Puede visualizar el listado completo de usuarios registrados y el detalle de cada perfil.
  * **Alumno:** Puede visualizar y editar únicamente su propio perfil.
* **Integraciones en Perfil:** Enlace directo a WhatsApp con prefijo de país configurable desde `.env` y enlace a red profesional en nueva pestaña.

## Requisitos Previos

* PHP >= 8.2
* Composer
* Node.js y NPM
* MySQL

## Guía de Instalación

1. **Clonar el repositorio e ingresar al proyecto:**
   ```bash
   git clone <url-del-repositorio>
   cd app-alumnos
   ```

2. **Instalar dependencias de PHP y JavaScript:**
   ```bash
   composer install
   npm install
   npm run build
   ```

3. **Configurar el archivo de entorno (`.env`):**
   Copia el archivo de ejemplo y genera la clave de la aplicación:
   ```bash
   cp .env.example .env
   php artisan key:generate
   ```

4. **Configurar la base de datos y el prefijo de WhatsApp en `.env`:**
   ```env
   DB_CONNECTION=mysql
   DB_HOST=127.0.0.1
   DB_PORT=3306
   DB_DATABASE=app_alumnos
   DB_USERNAME=root
   DB_PASSWORD=

   WHATSAPP_COUNTRY_PREFIX=549
   ```

5. **Ejecutar migraciones y seeders:**
   ```bash
   php artisan migrate --seed
   ```

6. **Crear enlace simbólico para las fotos de perfil:**
   ```bash
   php artisan storage:link
   ```

7. **Iniciar el servidor local:**
   ```bash
   php artisan serve
   ```

## Credenciales de Acceso por Defecto

* **Rol Administrador (Docente):**
  * **Email:** `docente@utn.edu.ar`
  * **Contraseña:** `password123`
* **Rol Alumno:**
  * Registrar un nuevo usuario desde `/register` completando los datos requeridos y subiendo una foto de perfil.
