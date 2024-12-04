<?php
use Illuminate\Support\Facades\Route;
// Sırpça için (sr)
Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale', 'where' => ['locale' => 'sr']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('localized.home');
    Route::get('/o-nama', [App\Http\Controllers\AboutController::class, 'index'])->name('localized.about');
    Route::get('/katalog', [App\Http\Controllers\HomeController::class, 'catalog'])->name('localized.catalogue');
    Route::get('/kontakt', [App\Http\Controllers\ContactController::class, 'index'])->name('localized.contact');
    Route::get('/kategorija/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('localized.category');
    Route::get('/proizvod/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('localized.product');
    Route::get('/blog-objave', [App\Http\Controllers\PostController::class, 'index'])->name('localized.blog-posts');
    Route::get('/blog-objave/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('localized.blog-posts.show');
});
