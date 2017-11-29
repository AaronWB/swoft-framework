<?php

return [
    'application' => [
        'id'          => APP_NAME,
        'name'        => APP_NAME,
        'errorAction' => '/error/index',
        'useProvider' => false,
    ],
    'httpRouter'      => [
        'class'          => \Swoft\Router\Http\HandlerMapping::class,
        'ignoreLastSep'  => false,
        'tmpCacheNumber' => 1000,
        'matchAll'       => '',
    ],
    'renderer'    => [
        'class'     => \Swoft\Web\ViewRenderer::class,
        'viewsPath' => "@resources/views/",
    ],
];
