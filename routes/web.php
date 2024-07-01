<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Route::get('/', function () {
//     return view('welcome');
// });

/*
|--------------------------------------------------------------------------
| Guest
|--------------------------------------------------------------------------
|
| The guests routes
|
*/
Route::get('/', [App\Http\Controllers\PageController::class, 'index']);
Route::get('residential', [App\Http\Controllers\ProductController::class, 'indexResidentialProducts'])->name('guest.product.residentail');
Route::get('commercial', [App\Http\Controllers\ProductController::class, 'indexCommercialProducts'])->name('guest.product.commercial');
Route::get('product/{slug}', [App\Http\Controllers\ProductController::class, 'getProductDetails'])->name('guest.product.details');
Route::get('product-document/{document}', [App\Http\Controllers\ProductController::class, 'download'])->name('guest.document.download');
Route::get('quote', [App\Http\Controllers\QuoteController::class, 'index'])->name('guest.quote.index');
Route::post('quote', [App\Http\Controllers\QuoteController::class, 'store'])->name('guest.quote.store');
Route::get('services', [App\Http\Controllers\ServiceController::class, 'index'])->name('guest.services.index');
Route::get('distributor', [App\Http\Controllers\PageController::class, 'indexDistributor']);
Route::get('repair', [App\Http\Controllers\PageController::class, 'indexRepair']);
Route::get('blogs', [App\Http\Controllers\PageController::class, 'indexBlogs']);
Route::get('privacy', [App\Http\Controllers\PageController::class, 'indexPrivacy']);

/*
|--------------------------------------------------------------------------
| User
|--------------------------------------------------------------------------
|
| The users routes
|
*/
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Admin
|--------------------------------------------------------------------------
|
| The admins routes
|
*/
Route::group([
    'prefix' => 'admin'
], function() {
    Route::get('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'showLoginForm']);
    Route::post('login', [App\Http\Controllers\Admin\Auth\LoginController::class, 'login'])->name('admin.login.store');
    Route::post('logout', [App\Http\Controllers\Admin\Auth\LoginController::class, 'logout'])->name('admin.logout'); 
    Route::middleware('auth-admin')->group(function() {
        Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'getDashboard'])->name('admin.dashboard');
        Route::resource('products', App\Http\Controllers\Admin\ProductController::class);
        Route::post('product-specification', [App\Http\Controllers\Admin\ProductSpecificationController::class, 'store'])->name('admin.specification.store');
        Route::delete('product-specification/{specification}', [App\Http\Controllers\Admin\ProductSpecificationController::class, 'delete']);
        Route::get('product-document/{product}', [App\Http\Controllers\Admin\ProductDocumentController::class, 'show'])->name('admin.document.show');
        Route::get('product-document-download/{document}', [App\Http\Controllers\Admin\ProductDocumentController::class, 'download'])->name('admin.document.download');
        Route::post('product-document', [App\Http\Controllers\Admin\ProductDocumentController::class, 'store'])->name('admin.document.store');
        Route::delete('product-document/{document}', [App\Http\Controllers\Admin\ProductDocumentController::class, 'delete']);
        Route::get('quotes', [App\Http\Controllers\Admin\QuoteController::class, 'index'])->name('admin.quote.index');
        Route::get('getQuotes', [App\Http\Controllers\Admin\QuoteController::class, 'getQuotes']);
        Route::get('quote/{quote}/details', [App\Http\Controllers\Admin\QuoteController::class, 'show'])->name('admin.quote.show');
        Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
        Route::resource('distributors', App\Http\Controllers\Admin\DistributorController::class);
        Route::get('getDistributors', [App\Http\Controllers\Admin\DistributorController::class, 'getDistributors']);
        Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class);
        Route::resource('admins', App\Http\Controllers\Admin\AdminController::class);
    });
});