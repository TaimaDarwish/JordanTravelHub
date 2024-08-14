<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostLikeController;
use App\Http\Controllers\UserPostController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LandmarkController;


// Route::get('/', function () {
//     return 'Laravel is working!';
// });

// require base_path('routes/api.php');
// 
Route::prefix('api/v1')->group(function () {
    Route::get('landmarks', [LandmarkController::class, 'index']);

});

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/landmark/{id}', [LandmarkController::class, 'show'])->name('landmark.show');
Route::get('/landmarks/{id}', [LandmarkController::class, 'show'])->name('landmarks.show');//added this for validation

// Route::get('/landmark/{landmark}', [LandmarkController::class, 'show']);

// Route::view('/petra','petra')->name('petra');
// Route::view('/wadirum','wadirum')->name('wadirum');
// Route::view('/romantheater','romantheater')->name('romantheater');
// Route::view('/deadsea','deadsea')->name('deadsea');
// Route::view('/aqaba','aqaba')->name('aqaba');

// Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::get('/users/{user:username}/posts', [UserPostController::class, 'index'])->name('users.posts');

Route::post('/logout', [LogoutController::class, 'store'])->name('logout');

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store']);

Route::get('/register', [RegisterController::class, 'index'])->name('register');
Route::post('/register', [RegisterController::class, 'store']);
// //////////////////////////////////////////////////////
Route::get('/posts', [PostController::class, 'index'])->name('posts');
// Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
// Route::post('/posts', [PostController::class, 'store']);
// Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy');
// Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::post('/posts', [PostController::class, 'store'])->name('posts.store')->middleware('auth');
Route::get('/posts/{post}', [PostController::class, 'show'])->name('posts.show');
Route::delete('/posts/{post}', [PostController::class, 'destroy'])->name('posts.destroy')->middleware('auth');


Route::post('/posts/{post}/like', [PostLikeController::class, 'store'])->name('posts.like')->middleware('auth');
Route::delete('/posts/{post}/like', [PostLikeController::class, 'destroy'])->name('posts.unlike')->middleware('auth');

// Route::post('/posts/{post}/likes', [PostLikeController::class, 'store'])->name('posts.likes');
// Route::delete('/posts/{post}/likes', [PostLikeController::class, 'destroy'])->name('posts.likes');





