<?php

use App\Http\Controllers\AuthorController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostsController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\RequestController;
use App\Http\Middleware\WriterAccess;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', [HomeController::class, 'welcome'])->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/view_article/{id}', [PostsController::class, 'view_post'])->name('view_article');
Route::get('/author/{id}', [AuthorController::class, 'author'])->name('author');
Route::get('/contact_us', [ContactController::class, 'view_contact'])->name('view_contact');
Route::post('/contact_us', [ContactController::class, 'contact_form'])->name('contact_form');
Route::post('/subscribe', [ContactController::class, 'subscribe_form'])->name('subscribe');
Route::get('/tags/{tag}', [PostsController::class, 'tags'])->name('tags');

Route::middleware('auth')->group(function () {
    Route::get('/become_author', [RequestController::class, 'become_author'])->name('become_author');
    Route::post('/submit_author', [RequestController::class, 'submit_author'])->name('submit_author');
});


Route::middleware('auth', 'WriterAccess')->group(function () {
    Route::get('/add_article', [PostsController::class, 'view_add'])->name('add_article');
    Route::post('/add_article', [PostsController::class, 'post_article'])->name('post_article');

    Route::get('/update_article/{id}', [PostsController::class, 'update_article_view'])->name('update_article_view');
    Route::post('/update_article/{post}', [PostsController::class, 'update_article'])->name('update_article');


    Route::get('/drafts', [PostsController::class, 'draft'])->name('drafts');

    Route::post('/delete_article/{post}', [PostsController::class, 'delete_article'])->name('delete_article');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth', 'AdminAccess')->group(function () {
    Route::get('/author_requests', [RequestController::class, 'view_request'])->name('view_request');
    Route::get('single_request/{id}', [RequestController::class, 'single_request'])->name('single_request');
    Route::post('/approve_author/{user_id}', [RequestController::class, 'approve'])->name('approve_author');

    Route::get('/pending_articles', [RequestController::class, 'pending_articles'])->name('pending_articles');
    Route::post('/approve_article/{post}', [PostsController::class, 'approve'])->name('approve_article');


});

require __DIR__ . '/auth.php';
