<?php

use DMS\Tornado\Service;

$app->register('debug', function () {
    return new \Whoops\Run;
});

$app->register('debugHtml', function () {
    return new \Whoops\Handler\PrettyPageHandler;
});
