<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});
Route::get("helllo", function(){
    return "<hr> hello!</h1>";

});

Route::match(["get", "post"],"/match", function(){
    return"this is match for mutipel routs and parameters";
});
Route::get('/Student/{id}' ,function($id){
    return "Student info for id:".$id;
})->where("id","[0+9]+");
Route::get("/home",function(){
    return view("home");

});
Route::get("/category",function(){
    return view("category");
});
Route::get("/product",function(){
    return view("product");
});

   
