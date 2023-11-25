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

Route::get('/data-anggota', function () {
    return view('admin/data-anggota');
});

Route::get('/data-administrator', function () {
    return view('admin/data-administrator');
});

Route::get('/data-buku', function () {
    return view('admin/data-buku');
});

Route::get('/data-kategori', function () {
    return view('admin/data-kategori');
});

Route::get('/data-kategori', function () {
    return view('admin/data-kategori');
});

Route::get('/tambah-anggota', function () {
    return view('admin/tambah-anggota');
});

Route::get('/tambah-administrator', function () {
    return view('admin/tambah-administrator');
});

Route::get('/tambah-buku', function () {
    return view('admin/tambah-buku');
});

Route::get('/tambah-kategori', function () {
    return view('admin/tambah-kategori');
});

Route::get('/peminjaman', function () {
    return view('admin/peminjaman');
});

Route::get('/data-peminjaman', function () {
    return view('admin/data-peminjaman');
});

Route::get('/identitas-aplikasi', function () {
    return view('admin/identitas-aplikasi');
});
