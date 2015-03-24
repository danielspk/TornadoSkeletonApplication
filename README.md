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

### Configuración y Organización:

Todo aspecto referido a la configuración de la aplicación debe realizarse en el archivo:

>app/config/config.php

Todos los hooks de la aplicación deben realizarse en el archivo:

>app/config/hook.php

Todos los enrutamientos de la aplicación deben realizarse en el archivo:

>app/config/route.php

Los módulos HMVC deben alojarse en:
 
>app/modules/

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