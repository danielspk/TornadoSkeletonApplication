<?php

define('URLFRIENDLY', '/');

$app->config([
    'tornado_environment_development' => true,
    'tornado_hmvc_use'                => true,
    'tornado_hmvc_module_path'        => 'app/modules',
    'tornado_hmvc_serialize_path'     => 'app/modules'
]);
