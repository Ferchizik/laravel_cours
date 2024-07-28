<?php

use App\Http\Controllers\MyCalculateController;
use App\Http\Controllers\MyGoGoGoController;
use App\Http\Controllers\MyPlaceController;
use App\Http\Controllers\MyPostConrtoller;
use App\Http\Controllers\MySayController;
use App\Http\Controllers\MyWorkController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return "s";
});

Route::get('/my_page', function (){
    return 'This is my page';
});

Route::get('/my_hobby', function (){
    return 'My hobby is IT';
});

Route::get('/my_name', function (){
    return 'My name is Stepan';
});

Route::get('/calc', function (){
    return 5 + 10;
});

Route::get('/testing', function (){
    return 'Is the testing Laravel!';
});

Route::get('/go_next', [MyPlaceController::class, "index"]);

Route::get('/user', [MySayController::class, 'sayHello']);

Route::get('/sum', [MyCalculateController::class, 'sum']);

Route::get('/go', [MyGoGoGoController::class, 'sayGoGoGo']);

Route::get('/post', [MyPostConrtoller::class, 'index']);

Route::get('post/all', [MyPostConrtoller::class, 'getAll']);


Route::get('/post/create', [MyPostConrtoller::class, 'create']);

Route::get('/post/update', [MyPostConrtoller::class, 'update']);

Route::get('/post/delete', [MyPostConrtoller::class, 'delete']);

Route::get('/post/first_or_create', [MyPostConrtoller::class, 'firstOrCreate']);

Route::get('/post/update_or_create', [MyPostConrtoller::class, 'updateOrCreate']);

Route::get('/цлк/update_or_create', [MyPostConrtoller::class, 'updateOrCreate']);

Route::get('/work', [MyWorkController::class, 'index']);

Route::get('/work/create', [MyWorkController::class, 'create']);

Route::get('/work/delete', [MyWorkController::class, 'delete']);

Route::get('/work/first_or_create', [MyWorkController::class, 'firstOrCreate']);

