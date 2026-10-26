# CRUD PHP Laravel MySQL

Aplicación web desarrollada con **PHP, Laravel y MySQL**, orientada a implementar las operaciones básicas de un CRUD (Create, Read, Update, Delete) para la gestión de datos.

El proyecto permite poner en práctica conceptos de desarrollo backend, integración con bases de datos relacionales y organización de aplicaciones web utilizando Laravel.

## Tecnologías utilizadas

- **PHP 8.2+** — Lenguaje de programación del backend.
- **Laravel 12** — Framework para el desarrollo de la aplicación.
- **MySQL** — Sistema de gestión de bases de datos relacionales.
- **Blade** — Motor de plantillas de Laravel.
- **Vite** — Herramienta para la gestión de recursos del frontend.
- **Tailwind CSS** — Framework CSS para los estilos.
- **Composer** — Gestión de dependencias de PHP.
- **NPM** — Gestión de dependencias del frontend.

## Funcionalidades

El proyecto está orientado a las operaciones fundamentales de un CRUD:

- **Create:** creación de nuevos registros.
- **Read:** consulta y visualización de datos.
- **Update:** modificación de registros existentes.
- **Delete:** eliminación de registros.

## Instalación y ejecución

### 1. Clonar el repositorio

```bash
git clone https://github.com/nahuelseguel/crud-php-laravel-mysql.git
cd crud-php-laravel-mysql
```

### 2. Instalar las dependencias

Instalar las dependencias de PHP:

```bash
composer install
```

Instalar las dependencias del frontend:

```bash
npm install
```

### 3. Configurar las variables de entorno

Crear el archivo `.env` a partir del archivo de ejemplo.

En Windows, PowerShell:

```powershell
Copy-Item .env.example .env
```

Generar la clave de la aplicación:

```bash
php artisan key:generate
```

### 4. Configurar la base de datos

Crear una base de datos MySQL local, por ejemplo, `crud_laravel_mysql`.

Editar el archivo `.env` con los datos correspondientes a la conexión:

```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=crud_laravel_mysql
DB_USERNAME=root
DB_PASSWORD=
```

Ajustar el nombre de la base de datos, el usuario y la contraseña según la configuración local.

### 5. Ejecutar las migraciones

```bash
php artisan migrate
```

Este comando ejecuta las migraciones disponibles en el proyecto para crear las tablas definidas por Laravel.

### 6. Iniciar la aplicación

En una terminal, ejecutar:

```bash
php artisan serve
```

Para compilar los recursos del frontend, ejecutar en otra terminal:

```bash
npm run build
```

Para trabajar con los recursos del frontend en modo desarrollo, utilizar:

```bash
npm run dev
```

Una vez iniciado el servidor, acceder a:

http://127.0.0.1:8000

## Estructura del proyecto

Laravel organiza el código en distintos directorios según su responsabilidad:

| Directorio | Descripción |
|---|---|
| `app/` | Lógica principal de la aplicación. |
| `routes/` | Definición de rutas. |
| `resources/` | Vistas y recursos del frontend. |
| `database/` | Migraciones, fábricas y seeders. |
| `public/` | Punto de entrada y recursos públicos. |
| `config/` | Archivos de configuración. |
| `tests/` | Estructura para pruebas automatizadas. |

## Objetivo del proyecto

Este proyecto forma parte de mi práctica en desarrollo web y me permite trabajar con tecnologías utilizadas en aplicaciones backend, profundizando en el uso de Laravel, PHP y bases de datos relacionales.

## Autor

**Nahuel Seguel**

- GitHub: [@nahuelseguel](https://github.com/nahuelseguel)
- Repositorio: [crud-php-laravel-mysql](https://github.com/nahuelseguel/crud-php-laravel-mysql)
