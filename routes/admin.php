<?php

use Illuminate\Support\Facades\Route;
Route::get('/admin', function(){
    return 'Admin Page';
});
Route::get('/admin/products', function(){
    return 'Admin Page';
});

Route::get('/admin/products/orders', function(){
    return 'Admin Page';
});