<?php

use App\Http\Controllers\API\StudentController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/students',[StudentController::class, 'index'])->name('student.list');
Route::post('/add-student',[StudentController::class, 'store'])->name('student.store');
Route::get('/edit-student/{id}',[StudentController::class, 'edit'])->name('student.edit');
Route::put('/update-student/{id}',[StudentController::class, 'update'])->name('student.update');
Route::delete('delete-student/{id}', [StudentController::class, 'destroy']);

