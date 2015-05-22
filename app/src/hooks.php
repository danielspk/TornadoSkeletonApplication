<?php

$app->hook('init', function () {

});

$app->hook('end', function () {

});

$app->hook('404', function () {
    echo 'Error 404<br />Página no encontrada';
});

$app->hook('error', function () use ($app) {

    if ($app->config('tornado_environment_development') === true) {

        $whoops = $app->container('debug');
        $whoops->pushHandler($app->container('debugHtml'));
        $whoops->handleException($app->error());

    } else {

        echo 'Production error: <br />' . $app->error();

    }

});
