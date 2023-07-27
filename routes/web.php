<?php

use App\Http\Controllers\StudentController;
use Illuminate\Support\Facades\Route;


// Route::get('/', function(){ // function call back- without name 
//     return 'Home';
// });

// Route::get('/about', function(){
//     return 'About Page';
// });

// Route::get('content', function(){
//     return 'Content Page';
// });
// Route::match(['put','patch'],'/edit', function(){
//     return "Edit";
// });

// Route::get('user/{name},{age}', function($name,$age){
//     return "Welcome " . $name ." your age is".$age ;
// });
// include 'admin.php';
// Route::get('/', function(){
//     $name = "php";
//     $type = "on";
//     $link=route("coursePage",[$name,$type]);
//     return "<a href ='$link'>course Page</a>";
// });

// // Route Groups
// Route::get('/courses/{name}/{type?}', function($name,$type = "online"){
//       return "Course $name and type $type";
//     })->name("coursePage");


// Route::prefix("student")->name('student.')->group(function () {
//     Route::get("/info/{name},{age}", [StudentController::class, 'info'])->name("info");
//     Route::get("/home", [StudentController::class, 'home'])->name("home");
//     Route::get("/about", [StudentController::class, 'about'])->name("about");

// });

Route::get("/info/{name}/{age}", [StudentController::class, 'info'])->name("info");
Route::get("/answer/{ans}", [StudentController::class, 'answer'])->name('answer');
