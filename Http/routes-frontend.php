<?php

use Illuminate\Routing\Router;

$router->group(['prefix' => '%module_name_lower'], function (Router $router) {
    $router->get('/', ['as' => 'pxcms.%module_name_lower.index', 'uses' => '%module_name_lowerController@getIndex']);
});
