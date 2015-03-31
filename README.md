Tornado Skeleton Application
============================

Aplicación esqueleto para Tornado-PHP

![ScreenShot](http://tornado-php.com/wp-content/uploads/2014/08/tornado-php.png)

TORNADO es un reducido marco de trabajo para PHP que permite implementar el 
patrón HMVC y/o servicios RESTfull

Puede obtener más información en su web http://tornado-php.com

### Instalación:

La instalación de la aplicación esqueleto para utilizar tornado requiere el uso de 
Composer. Si tiene dudas sobre como instalar Composer diríjase al siguiente enlace: 
https://getcomposer.org/download/

Instalación:

1. Descarge la aplicación esqueleto desde: https://github.com/danielspk/TornadoSkeletonApplication

2. Inicie la consola de comando y ejecute el siguiente comando:

```
composer install
```

3. En caso de querer utilizar URL amigables edite el archivo .htaccess del 
directorio raíz y modifique las líneas 4 y 5 de acuerdo a la ubicación del proyecto 
dentro del servidor y las restricciones que quiera aplicar a los redireccionamientos.

Puede realizar todos estos pasos juntos ejecutando la siguiente instrucción en la consola de comando:

```
composer create-project danielspk/tornadoskeletonapplicacion=1.0.5 /ruta/de/destino/de/proyecto
```

### Configuración y Organización:

Todo aspecto referido a la configuración de la aplicación debe realizarse en el archivo:

>app/config/config.php

Todos los hooks de la aplicación deben realizarse en el archivo:

>app/src/hooks.php

Todos los enrutamientos de la aplicación deben realizarse en el archivo:

>app/src/route.php

Todos los servicios inyectados de la aplicación deben realizarse en el archivo:

>app/src/services.php

Los módulos HMVC deben alojarse en:
 
>app/modules/

#### Ambiente de desarrollo

Dado que pueden existir definiciones que son exclusivas del ambiente de desarrollo, todos 
los archivos antes mencionados tienen su par con el prefijo "_dev" en su parte posterior 
para definir las configuraciones, servicios, ganchos y/o rutas que fueran específicas de 
dicho entorno (las mismas sólo se incluirán cuando la aplicación se encuentre en entorno de 
desarrollo: 'tornado_environment_development' === true) 

#### Datos de prueba

La aplicación esqueleto contiene una mínima configuración inicial (rutas, servicios, hooks, etc) a 
modo de ejemplo.
Todos los paquetes incluidos en "require-dev" del archivo de configuración de composer no son 
obligatorios para el funcionamiento de Tornado. Agrege y/o elimine los paquetes que su aplicación 
requiera.

###### Sugerencia para enlaces relativos y URL amigables:
Para que su sistema se ajuste rápidamente a un entorno de url amigables, puede 
definir, en el archivo de configuración, una constante llamada URLFRIENDLY 
con el valor de base para las rutas relativas, y luego utilizar la misma en la 
etiqueta base de html dentro del head. Ejemplo:

```php
    // usando .htaccess
    define('URLFRIENDLY', 'http://local.web/project/');

    // sin htaccess
    define('URLFRIENDLY', 'http://local.web/project/index.php?/');
```

```html
    <base href='<?=URLFRIENDLY?>' />

    <!-- ejemplo de uso -->
    <a href="./ruta">Link a ruta</a>
```

De esta forma con sólo editar el valor de dicha constante el sistema se ajustará 
automáticamente al uso o no de url amigables.

### Más información:

La documentación sobre el uso de Tornado PHP se encuentra disponible en http://tornado-php.com

### Sugerencias:

Escriba a la dirección info@daniel.spiridione.com.ar
