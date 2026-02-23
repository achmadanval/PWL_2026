<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserProfileController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\EventController;

Route::get('/hello', function () {
    return 'Hello World';
});

Route::get('/world', function () {
    return 'World';
});
Route::get('/Hai', function () {
    return 'Selamat Datang';
});
Route::get('/about', function () {
    return '244107020039';
});
Route::get('/User/{name}', function ($name) {
    return 'Nama Saya ' .$name;
});

Route::get('/post/{post}/comments/{comment}', function ($postid, $commentid) {
    return 'post ke- ' .$postid. "Komentar ke- ".$commentid;
});

Route::get('/User/{name?}', function ($name=null) {
    return 'Nama Saya ' .$name;
});

Route::get('/User/{name?}', function ($name='Jhon') {
    return 'Nama Saya ' .$name;
});


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