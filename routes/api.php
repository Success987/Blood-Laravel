<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\UserController;
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

Route::post('/login',[UserController::class,'post_login']);
Route::post('/create',[UserController::class,'post_create']);
Route::post('/forget',[UserController::class,'post_forget']);
Route::get('/get_blood_request',[UserController::class,'get_blood_request']);
Route::post('/add_blood_request',[UserController::class,'add_blood_request']);

/*
api/login
api/create
api/forget
api/get_blood_request
api/add_blood_request

*/
