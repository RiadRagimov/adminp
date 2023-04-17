<?php


use Core\Router as Route;

use App\Controller\SliderController;


Route::get('about/{name]',function (){
    echo "home iwledi";
});
Route::get('slider/{id}',[SliderController::class,'index']);
Route::get('user/{id}/{surname}',['ContactController','storeData']);
Route::get('slider/{text}/',['SliderController','index']);
Route::get('/about/{name}',['AboutController','index']);
Route::get('/',['HomeController','index']);
Route::post('contact/{id}',['ContactController','storeData']);

