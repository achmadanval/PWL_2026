<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\WelcomController;
use App\Http\Controllers\PhotoController;

Route::get('/hello',[WelcomController::class,'hello']);

Route::get('/world', function () {
    return 'World';
});
Route::get('/index', [PageController::class, 'index']);

Route::get('/about', function () {
    return '244107020039';
});
Route::get('/User/{name}', function ($name) {
    return 'Nama Saya' .$name;
});

Route::get('/about/{nama}/{NIM}', [PageController::class, 'about']);

Route::get('/post/{post}/comments/{comment}', function ($postid, $commentid) {
    return 'post ke- ' .$postid. "Komentar ke- ".$commentid;
});

Route::get('/articles/{id}', [PageController::class, 'articles']);

Route::get('/User/{name?}', function ($name=null) {
    return 'Nama Saya ' .$name;
});

Route::get('/User/{name?}', function ($name='Jhon') {
    return 'Nama Saya ' .$name;
});

Route::resource('photos', PhotoController::class )->only(['index','show']);

Route::resource('photos', PhotoController::class )->except(['create','store','update','destroy']);

Route::get('/greeting',[WelcomController::class,'greeting']);




/*

Route::get(
    '/user/profile',
    [UserProfileController::class, 'show']
)->name('profile');






//Route Group dan Route Prefixes
Route::middleware(['first', 'second'])->group(function () {
    Route::get('/', function () {
        // Uses first & second middleware...
    });

Route::get('/user/profile', function () {
        // Uses first & second middleware...
    });
});

Route::domain('{account}.example.com')->group(function () {
    Route::get('user/{id}', function ($account, $id) {
        //
    });
});
Route::middleware('auth')->group(function () {
	Route::get('/user', [UserController::class, 'index']);
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/event', [EventController::class, 'index']);
	
});
 //Route PRefixes
 Route::prefix('admin')->group(function () {
	Route::get('/user', [UserController::class, 'index']);
	Route::get('/post', [PostController::class, 'index']);
	Route::get('/event', [EventController::class, 'index']);

});
*/