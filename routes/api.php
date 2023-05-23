<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PeopleController;

Route::get('/people',[PeopleController::class,'index']);

Route::post('/save',[PeopleController::class,'store']);

Route::get('/show/{id}',[PeopleController::class,'show']);

Route::put('/update/{id}',[PeopleController::class,'update']);

Route::delete('/delete/{id}',[PeopleController::class,'destroy']);

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
