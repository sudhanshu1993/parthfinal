<?php

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

Route::view('/','front_end/index');
Route::view('/about','front_end/about');

Route::post('/',[App\Http\Controllers\AdminController::class,'membership_db'])->name('admin');


Route::get('gallery',[App\Http\Controllers\AdminController::class,'blogs_data'])->name('admin');

Route::get('contact',[App\Http\Controllers\AdminController::class,'contact'])->name('admin');
Route::post('contact',[App\Http\Controllers\AdminController::class,'contact_db'])->name('admin');




Route::match(['get','post'],'/admin/login',[App\Http\Controllers\AdminController::class,'login'])->name('admin');

Auth::routes();

Route::group(['namespace'=>'Admin','middleware'=>['auth'],],function(){
    
Route::get('/admin/adminindex',[App\Http\Controllers\AdminController::class,'adminindex'])->name('admin');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/admin/adminpages/addgallery',[App\Http\Controllers\AdminController::class,'blogs']);
Route::post('/admin/adminpages/addgallery',[App\Http\Controllers\AdminController::class,'blogs_db']);
Route::get('/admin/adminpages/admincontact',[App\Http\Controllers\AdminController::class,'contactdisplay'])->name('admin');
Route::get('/admin/adminpages/adminmembershipinfo',[App\Http\Controllers\AdminController::class,'membershipdisplay'])->name('admin');
Route::get('/admin/adminpages/galleryinfo',[App\Http\Controllers\AdminController::class,'bloglist']);
Route::get('/admin/adminpages/editblog',[App\Http\Controllers\AdminController::class,'edit']);
Route::get('edit/{id}',[App\Http\Controllers\AdminController::class,'editBlog'])->name('adminBlogEdit');
Route::put('update/{id}',[App\Http\Controllers\AdminController::class,'updateBlog'])->name('adminBlogUpdate');

Route::delete('admin/destroy/{id}',[App\Http\Controllers\AdminController::class,'deleteBlog'])->name('adminBlogDestroy');
});
