<?php

use App\Http\Controllers\LangController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Schema;

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

Route::get('/clear', function () {
    Artisan::call('cache:clear');
    Artisan::call('view:clear');
    Artisan::call('route:clear');
    Artisan::call('config:clear');
    Artisan::call('config:cache');
    echo 'Cache temizlendi!';
});

Route::get('/new-install', function () {
    Artisan::call('storage:link');
    Artisan::call('migrate:refresh');
    Artisan::call('db:seed');

    echo 'Veritaban(lar)ı başarıyla oluşturuldu';
});


Auth::routes();

Route::get('/dashboard',[\App\Http\Controllers\Admin\AdminController::class,'index'])->name('dashboard');
Route::get('/logout',[\App\Http\Controllers\Admin\AdminController::class,'logout'])->name('logout');
Route::get('/about-management','App\Http\Controllers\Admin\AboutController@index')->name('about.index');
Route::post('/about-management/','App\Http\Controllers\Admin\AboutController@store')->name('about.store');
Route::get('/about-management/{id}/{type}','App\Http\Controllers\Admin\AboutController@edit')->name('about.edit');
Route::post('/about-management/{id}','App\Http\Controllers\Admin\AboutController@update')->name('about.update');
Route::resource('/slider-management','App\Http\Controllers\Admin\SliderController');
Route::post('slider-management/delete','App\Http\Controllers\Admin\SliderController@deleteImage')->name('slider.delete');
Route::resource('/certificates','App\Http\Controllers\Admin\CertificateController');
Route::post('certificates/delete','App\Http\Controllers\Admin\CertificateController@deleteImage')->name('certificate.delete');
Route::resource('/homesections','App\Http\Controllers\Admin\HomeSectionsController');
Route::get('/homesections/{id}/{section}','App\Http\Controllers\Admin\HomeSectionsController@edit')->name('homesections.edit');
Route::post('homesections/delete','App\Http\Controllers\Admin\HomeSectionsController@deleteImage')->name('homesections.delete');
Route::resource('/sectiontabs','App\Http\Controllers\Admin\SectiontabsController');
Route::post('sectiontabs/delete','App\Http\Controllers\Admin\SectiontabsController@deleteImage')->name('sectiontabs.delete');
Route::resource('/categories','App\Http\Controllers\Admin\CategoryController');
Route::post('categories/delete','App\Http\Controllers\Admin\CategoryController@deleteImage')->name('categories.delete');
Route::resource('/products','App\Http\Controllers\Admin\ProductController');
Route::post('products/delete','App\Http\Controllers\Admin\ProductController@deleteImage')->name('products.delete');
Route::resource('/settings','App\Http\Controllers\Admin\SettingsController');
Route::get('/settings/{id}/{type}','App\Http\Controllers\Admin\SettingsController@edit')->name('settings.edit');
Route::resource('/catalog','App\Http\Controllers\Admin\CatalogController');
Route::post('/catalog/delete','App\Http\Controllers\Admin\CatalogController@deleteImage')->name('catalog.delete');






Route::get('/route-list',[\App\Http\Controllers\Admin\RouteController::class,'index'])->name('route.list');


Route::get('lang/home', [LangController::class, 'index']);
Route::get('lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/category/{slug}/lang/change', [LangController::class, 'change'])->name('changeLang');
Route::get('/category/lang/change', [LangController::class, 'change'])->name('changeLang');



Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');




Route::get('/about',[App\Http\Controllers\AboutController::class,'index'])->name('about');
Route::get('/catalogue',[App\Http\Controllers\HomeController::class,'catalog'])->name('catalogue');
Route::get('/contact',[App\Http\Controllers\ContactController::class,'index'])->name('contact');

Route::get('/category/{slug}', [App\Http\Controllers\CategoryController::class, 'index'])->name('category');
Route::get('/{slug}', [App\Http\Controllers\ProductController::class, 'index'])->name('product');


