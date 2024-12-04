<?php
use Illuminate\Support\Facades\Route;
// Fransızca için (fr)
Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale', 'where' => ['locale' => 'fr']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('localized.home');
    Route::get('/a-propos', [App\Http\Controllers\AboutController::class, 'index'])->name('localized.about');
    Route::get('/catalogue', [App\Http\Controllers\HomeController::class, 'catalog'])->name('localized.catalogue');
    Route::get('/contact', [App\Http\Controllers\ContactController::class, 'index'])->name('localized.contact');
    Route::get('/categorie/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('localized.category');
    Route::get('/produit/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('localized.product');
    Route::get('/articles', [App\Http\Controllers\PostController::class, 'index'])->name('localized.blog-posts');
    Route::get('/articles/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('localized.blog-posts.show');
});
