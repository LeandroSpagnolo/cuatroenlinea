# Cuatro en linea laravel - Adaptacion de ambientes y trabajos

El juego de 4 en lineas, hecho en php con ddev y laravel, se juega de a dos jugadores.


## Prerrequisitos
Enlaces oficiales a los prerrequisitos:
- Composer (https://getcomposer.org/download/)
- DDEV (https://ddev.readthedocs.io/en/stable/)
- Docker Desktop (https://docs.docker.com/desktop/)


<br/>

## Pasos para que funcione:

### Primero descargamos el repositorio en el directorio que lo querramos tener:

> ``git clone https://github.com/LeandroSpagnolo/cuatroenlinea.git``

### 1- Configuracion ddev
- Abrimos la consola en el directorio del recien descargado y ejecutamos el siguiente comando:

> ``ddev config``


Nos preguntara el nombre que le queremos dar a nuestro proyecto, este puede ser el que viene por defecto.
Luego donde queremos guardar la raiz del proyecto, podemos usar la misma en la que estamos.
Por ultimo nos pregunta que tipo de proyecto es, le decimos que laravel.

Ahora lo podemos iniciar con:

> ``ddev start``
<br/>

### 2- Verificación con composer

`Composer` es el gestor que vamos a usar para las dependencias de php, lo actualizamos con el siguiente comando:

>``ddev composer install``

<br/>

### 3- Crear archivo de ambiente

Las siguientes lineas son para asegurarnos que las variables del ambiente estan bien copiadas, ademas usamos los ultimos dos comandos para que no haya errores de permisos:

> ``ls -la``

> ``cp .env.example .env ``

>``echo "WWWGROUP=1000" >> .env``

>``echo "WWWUSER=1000" >> .env``

<br/>

### 4- Creación de clave
Creamos la clave de aplicacion para nuestro proyecto:
> ``php artisan key:generate``

<br/>

### 5- Correr aplicación
Una vez que ya completamos todos los pasos de arriba hacemos:

> ``ddev restart``

Una vez hecho eso, en la consola nos va a dar la direccion en la cual esta alojada nuestra pagina web, para entrar solo le agregariamos /jugar/1 a la direccion y deberiamos estar en el juego

### 6- Cerrar aplicación
Cuando querramos cerrar la aplicacion simplemente usamos el siguiente comando:

> ``ddev poweroff``

### Juega en cualquier momento!
Una vez que ya hayas configurado todo, no hay necesidad de hacerlo de nuevo si no que con el siguiente comando y entrando a la URL anteriormente mencionada en el paso 5 podremos jugar:

> ``ddev start``