<?php

use Yiisoft\DataResponse\Middleware\FormatDataResponseAsHtml;
use Yiisoft\DataResponse\Middleware\FormatDataResponseAsJson;
use Yiisoft\Router\Group;
use Yiisoft\Router\Route;
use Yiisoft\Swagger\Middleware\SwaggerUi;
use Yiisoft\Swagger\Middleware\SwaggerJson;

// Swagger routes
Group::create('/swagger', [
    Route::get('')
        ->addMiddleware(fn (SwaggerUi $swaggerUi) => $swaggerUi->withJsonUrl('/swagger/json-url'))
        ->addMiddleware(FormatDataResponseAsHtml::class),
    Route::get('/json-url')
        ->addMiddleware(static function (SwaggerJson $swaggerJson) {
            return $swaggerJson
                // Uncomment cache for production environment
                // ->withCache(3600)
                ->withAnnotationPaths([
                    '@src/Controller' // Path to API controllers
                ]);
        })
        ->addMiddleware(FormatDataResponseAsJson::class),
]);
