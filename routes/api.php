<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmployeeContoller;
use App\Http\Controllers\ProductController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/



 Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


   //Route::get('/user', function (Request $request){
   //return $request->user();
   //});
  // Route::apiResource('/authors' , AuthorsController::class);
//});

Route::post('/employee', [EmployeeContoller::class, 'store']);

Route::get('/employees', [EmployeeContoller::class, 'show']);

Route::put('employee/{id}/update', [EmployeeContoller::class, 'update']);

Route::delete('employee/{id}/delete', [EmployeeController::class, 'delete']); 


Route::post('/product' , [ProductController::class, 'store']);