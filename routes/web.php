<?php

use App\Http\Controllers\AdminDocumentsPageController;
use App\Models\News;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\AdminNewsPagesController;
use App\Http\Controllers\AdminGaleryPagesController;
use App\Http\Controllers\DocumentsController;
use App\Http\Controllers\FrontendController;
use League\CommonMark\Node\Block\Document;

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
// Login routes

Route::get('/login', [LoginController::class, 'getLogin'])->name('login_view');
Route::post('/login', [LoginController::class, 'authenticate'])->name('login');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Admin routes
Route::middleware('auth')->group(function(){
    // news routes
    Route::get('/admin', [Controller::class, 'index']);
    Route::get('/admin/news', [AdminNewsPagesController::class, 'index']);
    Route::get('/admin/news/add', [AdminNewsPagesController::class, 'store']);
    Route::post('/admin/news/add', [NewsController::class, 'store']);
    Route::get('/admin/news/edit/{id}', [AdminNewsPagesController::class, 'edit'])->name('admin.news.edit');
    Route::post('/admin/news/edit/{id}', [NewsController::class, 'edit'])->name('admin.news.update');
    Route::delete('/admin/news/{id}', [NewsController::class, 'destroy'])->name('admin.news.destroy');
    Route::get('/admin/news/search', [NewsController::class, 'search'])->name('search.news');


    // gallery routes
    Route::get('/admin/gallery', [AdminGaleryPagesController::class, 'index']);
    Route::get('/admin/gallery/add', [AdminGaleryPagesController::class, 'store']);
    Route::post('/admin/gallery/add', [GalleryController::class, 'store'])->name('gallery.store');
    Route::delete('/admin/gallery/{id}', [GalleryController::class, 'destroy'])->name('gallery.destroy');

    // erasmus routes
    Route::get('/admin/erasmus', [AdminDocumentsPageController::class, 'index_erasmus']);
    Route::get('/admin/erasmus/add', [AdminDocumentsPageController::class, 'show_add_erasmus']);
    Route::post('/admin/erasmus/add', [DocumentsController::class, 'store_erasmus']);
    Route::get('/admin/erasmus/edit/{id}', [AdminDocumentsPageController::class, 'edit_erasmus'])->name('erasmus.edit.show');
    Route::post('/admin/erasmus/edit/{id}', [DocumentsController::class, 'edit_erasmus'])->name('erasmus.update');
    Route::delete('/admin/erasmus/{id}', [DocumentsController::class, 'destroy_erasmus'])->name('erasmus.destroy');
    
    // Documents route
    Route::get('/admin/documents', [AdminDocumentsPageController::class, 'index_documents']);
    Route::get('/admin/documents/add', [AdminDocumentsPageController::class, 'create_documents']);
    Route::post('/admin/documents/add', [DocumentsController::class, 'storeDocuments'])->name('store.documents');
    Route::get('/admin/documents/category/{id}', [AdminDocumentsPageController::class, 'documentsByCategories'])->name('documentsByCategories');
    Route::get('/admin/documents/edit/{id}', [AdminDocumentsPageController::class, 'editDocuments']);
    Route::post('/admin/documents/edit/{id}', [DocumentsController::class, 'updateDocuments'])->name('update.documents');
    Route::delete('/admin/documents/{id}', [DocumentsController::class, 'destroyDocument'])->name('document.destroy');
});

// Frontend routes

Route::get('/', [FrontendController::class, 'index']);
Route::get('/gallery', [FrontendController::class, 'gallery']);
