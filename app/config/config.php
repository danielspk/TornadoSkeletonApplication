<?php

define('URLFRIENDLY', '/');

$app = \DMS\Tornado\Tornado::getInstance();

$app->config('tornado_environment_development', true);
$app->config('tornado_hmvc_use', true);
$app->config('tornado_hmvc_module_path', 'app/modules');
$app->config('tornado_hmvc_serialize_path', 'app/config');


