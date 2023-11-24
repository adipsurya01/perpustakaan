<?php
use App\Http\Controllers\TemplateController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::resource('admin', TemplateController::class); 

Route::get('/dashboard', function () {
    return view('admin/dashboard');
});

Route::get('/login', function () {
    return view('admin/login');
});

Route::get('/register', function () {
    return view('admin/register');
});