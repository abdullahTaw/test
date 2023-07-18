<?php

use Illuminate\Support\Facades\Route;


Route::get('/', function(){ // function call back- without name 
    return 'Home';
});

Route::get('/about', function(){
    return 'About Page';
});

Route::get('/Content', function(){
    return 'Content Page';
});
Route::match(['put','patch'],'/edit', function(){
    return "Edit";
});

Route::get('user/{name},{age}', function($name,$age){
    return "Welcome " . $name ." your age is".$age ;
});
include 'admin.php';


