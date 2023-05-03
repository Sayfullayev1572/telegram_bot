<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiteController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\TeachersController;
use App\Http\Controllers\PostsController;

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

// Route::get('/', [SiteController::class, 'welcome'])->name('home');
// Route::get("/about", [SiteController::class, 'about'])->name('about');
// Route::get("/contact", [SiteController::class, "contact"])->name("contact");
// Route::get('/blogsingle', [SiteController::class, "blogsingle"])->name('blogesingle');
// Route::get('/blog', [SiteController::class, 'blog'])->name('blog');
// Route::get('/portfoliodetails', [SiteController::class, 'portfoliodetails'])->name('portfoliodetails');
// Route::get('/portfolio', [SiteController::class, 'portfolio'])->name('portfolio');
// Route::get('/pricing', [SiteController::class, 'pricing'])->name('pricing');
// Route::get('/service', [SiteController::class, 'services'])->name('services');
// Route::get('/team', [SiteController::class, "team"])->name('team');
// Route::get('/testimonial', [SiteController::class, 'testimonial'])->name('testimonial');

// Route::get('/components', [SiteController::class, 'components']);

// Route::get('/teachers', [TeachersController::class, 'create']);
// Route::post('/teachers', [TeachersController::class, 'store']);

// Route::resource('teachers', TeachersController::class);

Route::resource('posts', PostsController::class);
