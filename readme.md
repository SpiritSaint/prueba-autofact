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

# Datos de prueba

Para insertar datos de prueba, solo debes ejecutar el siguiente comando en consola:

```
php artisan db:seed
```

Esto creará 100 respuestas y 11 usuarios. El primero de ellos tendrá permisos de administrador con los siguientes datos:

```
Correo: admin@dominio.cl
Contraseña: password
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

# Api REST

La aplicación cuenta con la siguiente API rest:

|URL|Método|Descripción|
|---|---|
|/api/response|GET|Obtiene todos las respuestas en sistema|
|/api/response|POST|Inserta una respuesta en la base de datos, requiere los campos de score, suggestions y is_correct.|
|/api/response/{id}|GET|Obtiene una respuesta en específico|
|/api/response/{id}|PUT|Actualiza una respuesta en la base de datos, requiere los campos de score, suggestions y is_correct.|
|/api/response/{id}|DELETE|Elimina una respuesta en la base de datos|

## Estructura de datos

Cada objeto tiene las columnas:

- score: El cual contiene el puntaje. Para el caso práctico es de 1 a 5.
- suggestions: El cual contiene la sugerencia. Corresponde a un campo de texto.
- is_correct: El cual responde a la pregunta si es correcto. Siendo el valor 1: "SI", 2: "NO", 3: "Más o Menos".

# Sugerencias

## Arquitectura

Ordenaría el código en repositorios, seguiría principios SOLID en toda su codificación.

## Seguridad

Implementaría JWT, OAuth o autenticación por token.

## Escalabilidad

Eliminaría las sesiones y solo utilizaría la API.

## Rendimiento

Ajustaría las queries y añadiría indices a las tablas y las relaciones respectivas para mejorar las sentencias.

También movería toda la información a NoSQL para consultar en memoria y no en disco.

## Diseño

A nivel gráfico, añadiría colores, mejoraría el gráfico y añadiría traducciones.
A nivel código. utilizaría otro proyecto en SPA para consumir los datos, quitando el uso de sesiones.

## Despliegue

Generaría la imágen docker.

## Otros

Añadiría pruebas automatizadas, factories para los registros, establecería procesos de integración continua y despliegue contínuo.

También utilizaría el reporte de cobertura al 100%. 
