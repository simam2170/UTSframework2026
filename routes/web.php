<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CalendarController;
use App\Http\Controllers\FormsElementsController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UiSweetalertController;

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ActivitiesController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController; 
use App\Http\Controllers\TestimonialController;



#admin
Route::prefix('administrator')->group(function () {
    Route::get('/', [AdminController::class, 'index'])->name('admin');
    Route::get('/forms-elements', [FormsElementsController::class, 'index'])->name('forms-elements');
    Route::get('/calendar', [CalendarController::class, 'index'])->name('calendar');
    Route::get('/tables-datatables', [TablesController::class, 'index'])->name('tables-datatables');
    Route::get('/ui-sweetalerts', [UiSweetalertController::class, 'index'])->name('ui-sweetalerts');
    Route::get('/pages-login', [LoginController::class, 'index'])->name('pages-login');
});

// Alias untuk URL /admin agar tidak 404 ketika diakses dengan prefix /admin
Route::prefix('admin')->group(function () {
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/forms-elements', [FormsElementsController::class, 'index']);
    Route::get('/calendar', [CalendarController::class, 'index']);
    Route::get('/tables-datatables', [TablesController::class, 'index']);
    Route::get('/ui-sweetalerts', [UiSweetalertController::class, 'index']);
    Route::get('/pages-login', [LoginController::class, 'index']);
});   

#landing
Route::get('/', [HomeController::class, 'index'])->name('Home');
Route::get('/about', [AboutController::class, 'index'])->name('About');
Route::get('/activities', [ActivitiesController::class, 'index'])->name('Activities');
Route::get('/blog', [BlogController::class, 'index'])->name('Blog');
Route::get('/contact', [ContactController::class, 'index'])->name('Contact');
Route::get('/testimonial', [TestimonialController::class, 'index'])->name('Testimonial');