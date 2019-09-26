<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/
/** @var Laravel\Lumen\Routing\Router $router */
$router->get('/', function () use ($router) {
    return $router->app->version();
}); 

$router->group(['prefix'=>"api"],function()use ($router) {

    $router->group(['prefix'=>"contatos","middleware"=>'auth'],function()use ($router) {
        $router->get('','ContatosController@index');
        $router->get('{id}','ContatosController@show');
        $router->post('','ContatosController@store');
        $router->put('{id}','ContatosController@update');
        $router->delete('{id}','ContatosController@destroy');
    });
});
$router->post('/api/login','TokenController@geraToken');