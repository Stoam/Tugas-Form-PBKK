<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormController;
use App\Http\Controllers\DatabaseController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/test', function () {
    return view('test');
});

Route::get('/test-connection', [DatabaseController::class, 'testConnection']);

Route::get('/form', [FormController::class, 'index']);

Route::post('/form', [FormController::class, 'show']);

Route::get('/formData', [FormController::class, 'viewFormData']);

Route::get('/result', [FormController::class, 'result']);
