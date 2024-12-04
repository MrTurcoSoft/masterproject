<?php
use Illuminate\Support\Facades\Route;
// Macarca için (hu)
Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale', 'where' => ['locale' => 'hu']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('localized.home');
    Route::get('/rolunk', [App\Http\Controllers\AboutController::class, 'index'])->name('localized.about');
    Route::get('/katalogus', [App\Http\Controllers\HomeController::class, 'catalog'])->name('localized.catalogue');
    Route::get('/kapcsolat', [App\Http\Controllers\ContactController::class, 'index'])->name('localized.contact');
    Route::get('/kategoriak/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('localized.category');
    Route::get('/termek/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('localized.product');
    Route::get('/blog-bejegyzesek', [App\Http\Controllers\PostController::class, 'index'])->name('localized.blog-posts');
    Route::get('/blog-bejegyzesek/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('localized.blog-posts.show');
});
