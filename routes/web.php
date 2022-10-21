<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BlogController;
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

Route::get('/o-nama', function() {
    return view('about');
})->name('about');

Route::get('/kontakt', function() {
    return view('contact');
})->name('contact');

Route::get('/hvala', function() {
    return view('thank-you');
})->name('thank-you');

Route::post('/kontakt', [BlogController::class, 'sendEmail'])->name('contact.post');

Route::get('/', [Blogcontroller::class, 'index'])->name('homepage');
Route::get('/blog', [Blogcontroller::class, 'list'])->name('blogs');
Route::post('/search', [Blogcontroller::class, 'search'])->name('blogs.search');
Route::get('/sitemap.xml', [Blogcontroller::class, 'sitemap'])->name('sitemap');
Route::get('/{slug}', [Blogcontroller::class, 'show'])->name('blogs.show');

