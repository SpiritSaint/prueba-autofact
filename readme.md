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

# Registros / Logs

La aplicación produce los siguientes logs:

|Log|Descripción|
|---|---|
|User join home.|Cuando un usuario ingresa al formulario o a la última respuesta.
|User join graph.|Cuando un usuario ingresa a ver el gráfico.|
|User join all responses.|Cuando un usuario ingresa a ver todas las respuestas.|
|Responses fetched through api.|Cuando la aplicación recuperó las respuestas desde la base de datos utilizando la API.|
|Response fetched through api.|Cuando la aplicación recuperó una respuesta desde la base de datos utilizando la API.|
|Response created through api.|Cuando la aplicación inserta una respuesta en la base de datos utilizando la API.|
|Response updated through api.|Cuando la aplicación actualizó una respuesta en la base de datos utilizando la API.|
|Responses deleted through api.|Cuando la aplicación eliminó una respuesta de la base de datos utilizando la API.|
|
