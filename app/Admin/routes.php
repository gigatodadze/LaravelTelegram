<?php

use App\Admin\Controllers\TelegramUserController;
use Illuminate\Routing\Router;

Admin::routes();

Route::group([
    'prefix'        => config('admin.route.prefix'),
    'namespace'     => config('admin.route.namespace'),
    'middleware'    => config('admin.route.middleware'),
    'as'            => config('admin.route.prefix') . '.',
], function (Router $router) {

    $router->get('/', 'HomeController@index')->name('home');
    $router->get('/telegramUser', 'TelegramUserController@index')->name('grid');

//    $router->get('/telegramUser', 'TelegramUserController@grid')->name('grid');
    $router->resource('telegram-users', TelegramUserController::class);
});
