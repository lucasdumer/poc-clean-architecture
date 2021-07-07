<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Interfaces\Http\Controllers\RoomController;
use App\Interfaces\Http\Controllers\CourseController;
use App\Interfaces\Http\Controllers\TeamController;
use App\Interfaces\Http\Controllers\StudentController;
use App\Interfaces\Http\Controllers\EnrollmentController;
use App\Interfaces\Http\Controllers\ClientController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::post('client', [ClientController::class, 'create']);
Route::get('client/{id}', [ClientController::class, 'find']);
Route::put('client/{id}', [ClientController::class, 'update']);
Route::delete('client/{id}', [ClientController::class, 'delete']);
Route::get('client', [ClientController::class, 'list']);
