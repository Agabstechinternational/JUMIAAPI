<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EmployeeContoller;

/*
GET-Request a resource
POST-create a new resource
PUT- update a resource
PATCH-Modify a resource 
DELETE - delete a resource 
OPTION - Ask the server which verbs are allowed 
*/

//GET

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/1', [PostController::class, 'show']);

//POST
Route::get('/blog/create', [PostController::class, 'create']);
Route::post('/blog', [PostController::class, 'store']);

//PUT OR PATCH
Route::get('/blog/edit/1', [PostController::class, 'edit']);
Route::patch('/blog/1', [PostController::class, 'update']);

//DELETE
Route::delete('/blog/1', [PostController::class, 'destroy']);


//Multiple HTTP verbs
Route::match(['GET', 'POST'], '/blog', [PostControllder::class, 'index']);
                       






//Route::get('blog', PostController::class);

//Route for invoke method
Route::get('/', HomeController::class);