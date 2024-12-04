<?php
use Illuminate\Support\Facades\Route;
// Almanca için (de)
Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale', 'where' => ['locale' => 'de']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('localized.home');
    Route::get('/uber-uns', [App\Http\Controllers\AboutController::class, 'index'])->name('localized.about');
    Route::get('/katalog', [App\Http\Controllers\HomeController::class, 'catalog'])->name('localized.catalogue');
    Route::get('/kontakt', [App\Http\Controllers\ContactController::class, 'index'])->name('localized.contact');
    Route::get('/kategorie/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('localized.category');
    Route::get('/produkt/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('localized.product');
    Route::get('/blog-artikel', [App\Http\Controllers\PostController::class, 'index'])->name('localized.blog-posts');
    Route::get('/blog-artikel/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('localized.blog-posts.show');
});
