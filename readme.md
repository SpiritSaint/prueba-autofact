# Requerimientos

- MySQL 5.7
- PHP 7.3
- Composer
- Librerías de PHP
  - mbstring
  - zip
  
# Instalación

Una vez clonado el repositorio se debe ejecutar el siguiente comando en la carpeta raiz:

```
composer install
cp .env.example .env
php artisan key:generate
```

Luego debemos ajustar las variables de entorno en el archivo `.env` con las configuraciones de base de datos.

```
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba
DB_USERNAME=newuser
DB_PASSWORD=user_password
```

A continuación tenemos que realizar la creación de las estructuras de datos ejecutando el siguiente comando:

```
php artisan migrate
```

# Ejecución

Para iniciar un servidor de pruebas debes ejecutar el siguiente comando:

```
php artisan serve
```
