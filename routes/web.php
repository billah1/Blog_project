<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\WebsiteController;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
//    Route::get('/dashboard', function () {
//        return view('dashboard');
//    })->name('dashboard');
    Route::get('/dashboard',[AdminController::class,'index'])->name('dashboard');
    Route::get('/add-blog',[BlogController::class,'addBlog'])->name('add-blog');
    Route::post('/new-blog',[BlogController::class,'saveBlog'])->name('new-blog');
    Route::get('/manage-blog',[BlogController::class,'manageBlog'])->name('manage-blog');

    Route::get('/add-category',[CategoryController::class,'addCategory'])->name('add-category');
    Route::get('/manage-category',[CategoryController::class,'manageCategory'])->name('manage-category');
    Route::post('/new-category',[CategoryController::class,'saveCategory'])->name('new-category');
    Route::get('/status/{id}',[CategoryController::class,'status'])->name('status');
    Route::post('/delete-category',[CategoryController::class,'deleteCategory'])->name('delete-category');
    Route::get('/edit-category/{id}',[CategoryController::class,'editCategory'])->name('edit-category');
    Route::post('update-category',[CategoryController::class,'updateCategory'])->name('update-category');

    Route::get('add-author',[AuthorController::class,'addAuthor'])->name('add-author');
    Route::post('new-author',[AuthorController::class,'saveAuthor'])->name('new-author');
    Route::get('manage-author',[AuthorController::class,'manageAuthor'])->name('manage-author');
    Route::get('status/{id}',[AuthorController::class,'status'])->name('status');
    Route::post('delete-author',[AuthorController::class,'deleteAuthor'])->name('delete-author');
    Route::get('edit-author/{id}',[AuthorController::class,'editAuthor'])->name('edit-author');
    Route::post('update-author',[AuthorController::class,'updateAuthor'])->name('update-author');

    Route::get('add-site',[SettingController::class,'addsite'])->name('add-site');
    Route::post('new-site',[SettingController::class,'savesite'])->name('new-site');
    Route::get('manage-site',[SettingController::class,'managesite'])->name('manage-site');
    Route::get('status/{id}',[SettingController::class,'status'])->name('status');
    Route::post('delete-site',[SettingController::class,'deletesite'])->name('delete-site');
    Route::get('edit-site/{id}',[SettingController::class,'editsite'])->name('edit-site');
    Route::post('update-site',[SettingController::class,'updatesite'])->name('update-site');


    Route::get('add-website',[WebsiteController::class,'addwebsite'])->name('add-website');
    Route::post('new-website',[WebsiteController::class,'savewebsite'])->name('new-website');
    Route::get('manage-website',[WebsiteController::class,'managewebsite'])->name('manage-website');
    Route::get('status/{id}',[WebsiteController::class,'status'])->name('status');
    Route::post('delete-website',[WebsiteController::class,'deletewebsite'])->name('delete-website');
    Route::get('edit-website/{id}',[WebsiteController::class,'editwebsite'])->name('edit-website');
    Route::post('update-website',[WebsiteController::class,'updatewebsite'])->name('update-website');







});
