<?php
use Illuminate\Support\Facades\Route;
// İspanyolca için (es)
Route::group(['prefix' => '{locale}', 'middleware' => 'setlocale', 'where' => ['locale' => 'es']], function () {
    Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('localized.home');
    Route::get('/sobre-nosotros', [App\Http\Controllers\AboutController::class, 'index'])->name('localized.about');
    Route::get('/catalogo', [App\Http\Controllers\HomeController::class, 'catalog'])->name('localized.catalogue');
    Route::get('/contacto', [App\Http\Controllers\ContactController::class, 'index'])->name('localized.contact');
    Route::get('/categoria/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('localized.category');
    Route::get('/producto/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('localized.product');
    Route::get('/entradas-de-blog', [App\Http\Controllers\PostController::class, 'index'])->name('localized.blog-posts');
    Route::get('/entradas-de-blog/{slug}', [App\Http\Controllers\PostController::class, 'show'])->name('localized.blog-posts.show');
});

