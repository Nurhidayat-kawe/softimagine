<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/services', [PageController::class, 'services'])->name('services');
Route::get('/portfolio', [PageController::class, 'portfolio'])->name('portfolio');
Route::get('/blog', [PageController::class, 'blog'])->name('blog');
Route::get('/blog/{slug}', [PageController::class, 'blogShow'])->name('blog.show');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/contact', [ContactController::class, 'send'])->name('contact.send');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::prefix('admin')->name('admin.')->middleware(['auth', \App\Http\Middleware\AdminMiddleware::class])->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'index'])->name('dashboard');

    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class)->except(['show']);
    Route::resource('portfolios', App\Http\Controllers\Admin\PortfolioController::class)->except(['show']);
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class)->except(['show']);
    Route::resource('blogs', App\Http\Controllers\Admin\BlogController::class)->except(['show']);
    Route::resource('team', App\Http\Controllers\Admin\TeamMemberController::class)->parameters(['team' => 'teamMember'])->except(['show']);

    Route::get('stats', [App\Http\Controllers\Admin\SiteStatController::class, 'index'])->name('stats.index');
    Route::post('stats', [App\Http\Controllers\Admin\SiteStatController::class, 'update'])->name('stats.update');

    Route::get('settings', [App\Http\Controllers\Admin\SiteSettingController::class, 'index'])->name('settings.index');
    Route::post('settings', [App\Http\Controllers\Admin\SiteSettingController::class, 'update'])->name('settings.update');
});
