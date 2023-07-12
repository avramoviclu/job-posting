<?php

use App\Http\Controllers\AddUserToCompanyController;
use App\Http\Controllers\CreateCompanyController;
use App\Http\Controllers\CreatePostController;
use App\Http\Controllers\CreateUserController;
use App\Http\Controllers\DeleteCompanyController;
use App\Http\Controllers\DeletePostController;
use App\Http\Controllers\DeleteUserController;
use App\Http\Controllers\UpdateCompanyController;
use App\Http\Controllers\UpdatePostController;
use App\Http\Controllers\UpdateUserController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::post('/companies/{company}/add-user', [AddUserToCompanyController::class])->name('add-user-to-company');
Route::post('/companies', [CreateCompanyController::class])->name('create-company');
Route::delete('/companies/{company}', [DeleteCompanyController::class])->name('delete-company');
Route::put('/companies/{company}', [UpdateCompanyController::class])->name('update-company');

Route::post('/posts', [CreatePostController::class])->name('create-post');
Route::delete('/posts/{post}', [DeletePostController::class])->name('create-post');
Route::put('/posts/{post}', [UpdatePostController::class])->name('update-post');

Route::post('/users', [CreateUserController::class])->name('create-user');
Route::delete('/users/{user}', [DeleteUserController::class])->name('create-user');
Route::put('/users/{user}', [UpdateUserController::class])->name('update-user');
