# PruebaSurtilider
Proyecto desarrollado en el framework de laravel usando una DB MySQL para la presentación de la prueba técnica de la empresa SurtiLider.


# Clonación de repositorio
- Para iniciar se debe hacer un git clone al repositorio
- Luego de tener la carpeta del proyecto, se debe acceder a ella desde la terminal
- Correr el comando composer install (se debe tener composer instalado)
- Generar el archivo .env en la raiz del proyecto, se muestra un ejemplo a continuación:
APP_NAME=Laravel
APP_ENV=local
APP_KEY=base64:AkemRpeMRfflJc/Is4LeoaGhtOJYQBbz7hh2U3kN/BQ=
APP_DEBUG=true
APP_URL=http://localhost

LOG_CHANNEL=stack
LOG_DEPRECATIONS_CHANNEL=null
LOG_LEVEL=debug

DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=prueba_surtilider
DB_USERNAME=root
DB_PASSWORD=admin

BROADCAST_DRIVER=log
CACHE_DRIVER=file
FILESYSTEM_DISK=local
QUEUE_CONNECTION=sync
SESSION_DRIVER=file
SESSION_LIFETIME=120

MEMCACHED_HOST=127.0.0.1

REDIS_HOST=127.0.0.1
REDIS_PASSWORD=null
REDIS_PORT=6379

MAIL_MAILER=smtp
MAIL_HOST=mailhog
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
MAIL_FROM_ADDRESS="hello@example.com"
MAIL_FROM_NAME="${APP_NAME}"

AWS_ACCESS_KEY_ID=
AWS_SECRET_ACCESS_KEY=
AWS_DEFAULT_REGION=us-east-1
AWS_BUCKET=
AWS_USE_PATH_STYLE_ENDPOINT=false

PUSHER_APP_ID=
PUSHER_APP_KEY=
PUSHER_APP_SECRET=
PUSHER_HOST=
PUSHER_PORT=443
PUSHER_SCHEME=https
PUSHER_APP_CLUSTER=mt1

VITE_PUSHER_APP_KEY="${PUSHER_APP_KEY}"
VITE_PUSHER_HOST="${PUSHER_HOST}"
VITE_PUSHER_PORT="${PUSHER_PORT}"
VITE_PUSHER_SCHEME="${PUSHER_SCHEME}"
VITE_PUSHER_APP_CLUSTER="${PUSHER_APP_CLUSTER}"

- Para este proyecto se uso una base de datos llamada prueba_surtilider con sus respectivos usuarios y contraseñas

# Generar key
- Se debe correr el comando php artisan key:generate

# Crear la base de datos en su gestor
- Se debe llamar igual a como la declara en el archivo .env

# Correr migraciones
- Se debe correr el comando php artisan migrate:fresh --seed
- Esto con el objetivo de que laravel cree automaticamente las tablas y sus relaciones

# Correr server
- Ejecutar el comando php artisan serve
