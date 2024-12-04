<?php
use Illuminate\Support\Facades\Route;
// İtalyanca için (it)
Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale', 'where' => ['locale' => 'it']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('localized.home');
    Route::get('/chi-siamo', [App\Http\Controllers\AboutController::class, 'index'])->name('localized.about');
    Route::get('/catalogo', [App\Http\Controllers\HomeController::class, 'catalog'])->name('localized.catalogue');
    Route::get('/contatto', [App\Http\Controllers\ContactController::class, 'index'])->name('localized.contact');
    Route::get('/categoria/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('localized.category');
    Route::get('/prodotto/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('localized.product');
    Route::get('/articoli', [App\Http\Controllers\PostController::class, 'index'])->name('localized.blog-posts');
    Route::get('/articoli/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('localized.blog-posts.show');
});
