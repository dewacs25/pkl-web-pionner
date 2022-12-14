<?php

use App\Http\Controllers\AdminBlogController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\AdminMitraController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\IsiteknologiController;
use App\Http\Controllers\PelatihanController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\TeknologiController;
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
Route::get('/', [HomeController::class,'index']);
Route::get('/tentang', [HomeController::class,'tentang']);
Route::get('/faq', [HomeController::class,'faq']);
Route::get('/pelatihan', [HomeController::class,'pelatihan']);
Route::get('/blog', [HomeController::class,'blog']);
Route::view('/error', 'error.error404');
Route::get('/blog/{id}/{judul}', [HomeController::class,'tampilBlog']);
Route::get('/pelatihan/{id}/{judul}', [HomeController::class,'tampilPelatihan']);
Route::get('/contact', [HomeController::class,'contact']);
Route::get('/portofolio', [HomeController::class,'portofolio']);






Route::get('admin/', [AdminController::class,'index']);

Route::get('admin/blog/', [AdminController::class, 'blog']);
Route::get('admin/blog/tambah', [AdminBlogController::class, 'tambah']);

Route::post('blog/tambah', [AdminBlogController::class, 'p_tambah']);
Route::post('admin/blog/hapus/{id}', [AdminBlogController::class, 'hapus']);

Route::get('admin/blog/edit/{id}', [AdminBlogController::class, 'edit']);
Route::put('admin/blog/edit/{id}', [AdminBlogController::class,'p_edit']);


Route::get('admin/pelatihan/', [AdminController::class,'pelatihan']);

Route::get('admin/pelatihan/tambah', [PelatihanController::class, 'tambah']);

Route::post('admin/pelatihan/tambah', [PelatihanController::class, 'p_tambah']);
Route::post('admin/pelatihan/hapus/{id}', [PelatihanController::class, 'hapus']);

Route::get('admin/pelatihan/edit/{id}', [PelatihanController::class, 'edit']);
Route::put('admin/pelatihan/edit/{id}', [PelatihanController::class,'p_edit']);


Route::get('admin/mitra/', [AdminController::class,'mitra']);
Route::post('admin/mitra/tambah', [AdminMitraController::class, 'p_tambah']);
Route::put('admin/mitra/edit/{id}', [AdminMitraController::class,'p_edit']);
Route::post('admin/mitra/hapus/{id}', [AdminMitraController::class, 'hapus']);


Route::get('/admin/layanan',[AdminController::class,'layanan']);
Route::post('/admin/layanan/tambah',[TeknologiController::class,'tambah']);
Route::delete('/admin/layanan/hapus/{id}',[TeknologiController::class,'hapus']);
Route::get('admin/layanan/edit/{id}',[TeknologiController::class,'edit']);
Route::put('admin/layanan/edit/{id}',[TeknologiController::class,'p_edit']);

Route::get('/admin/service',[AdminController::class,'service']);
Route::get('/admin/service/{nama}/{id}',[AdminController::class,'service_tek']);
Route::get('admin/service/tambah',[IsiteknologiController::class,'tambah']);
Route::post('admin/service/tambah',[IsiteknologiController::class,'p_tambah']);
Route::delete('admin/service/hapus/{id}',[IsiteknologiController::class,'hapus']);
Route::get('/admin/service/a/edit/{id}',[IsiteknologiController::class,'edit']);
Route::put('/admin/service/edit/{id}',[IsiteknologiController::class,'p_edit']);


Route::get('/admin/portofolio',[AdminController::class,'portofolio']);
Route::post('/admin/portofolio/tambah',[PortofolioController::class,'tambah']);
Route::delete('/admin/portofolio/hapus/{id}',[PortofolioController::class,'hapus']);
Route::get('admin/portofolio/edit/{id}',[PortofolioController::class,'edit']);
Route::put('admin/portofolio/edit/{id}',[PortofolioController::class,'p_edit']);


Route::get('/l/{nama}/{id}',[HomeController::class,'layanan_t']);
Route::get('/l/{nama}/{id}/{judul}/{id_isi}',[HomeController::class,'all']);



