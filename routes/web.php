<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\PostController;

// Rute otentikasi (login, register, dll.)
Route::get('/', [UserController::class, 'welcome'])->name('welcome');
Route::get('/login', [UserController::class, 'showLoginForm'])->name('login');
Route::post('/login', [UserController::class, 'login']);
Route::get('/logout', [UserController::class, 'logout'])->name('logout');
Route::get('/register', [UserController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [UserController::class, 'register']);

// Menu Home
Route::middleware(['auth'])->group(function () {
    Route::get('/home', [MenuController::class, 'home'])->name('home');
    Route::get('/homeadmin', [MenuController::class, 'adminhome'])->name('admin-home');
    Route::delete('/admin-delete-post/{post}', [MenuController::class, 'adminDeletePost'])->name('admin-delete-post');
    Route::delete('/admin-delete-comment/{comment}', [MenuController::class, 'adminDeleteComment'])->name('admin-delete-comment');
    Route::get('/create-post', [PostController::class, 'create'])->name('create-post');
    Route::post('/store-post', [PostController::class, 'store'])->name('store-post');
    Route::get('/edit-post/{post}', [PostController::class, 'editPost'])->name('edit-post');
    Route::put('/update-post/{post}', [PostController::class, 'updatePost'])->name('update-post');
    Route::delete('/delete-post/{post}', [PostController::class, 'deletePost'])->name('delete-post');
    Route::post('/post-like/{id}', [PostController::class, 'like'])->name('post-like');
    Route::post('/post-comment/{id}', [PostController::class, 'comment'])->name('post-comment');
    Route::post('/like-post/{post}', [PostController::class, 'likePost'])->name('like-post');
    Route::post('/comment-post/{post}', [PostController::class, 'commentPost'])->name('comment-post');
    Route::get('/search', [MenuController::class, 'search'])->name('search')->middleware('auth');
    Route::get('/search-admin', [MenuController::class, 'searchadmin'])->name('searchadmin')->middleware('auth');
    Route::delete('/delete-comment/{comment}', [PostController::class, 'deleteComment'])->name('delete-comment');
});

// Menu About Us
Route::get('/aboutus', [MenuController::class, 'about_us'])->name('aboutus');

// Menu Profile
Route::middleware(['auth'])->group(function () {
    Route::get('/profile', [MenuController::class, 'profile'])->name('profile');
    Route::get('/edit-profile', [MenuController::class, 'edit_profile'])->name('edit-profile');
    Route::post('/update-profile', [MenuController::class, 'updateProfile'])->name('update-profile');
    Route::get('/user-profile/{id}', [MenuController::class, 'show'])->name('user-profile');
    Route::get('/user-profile-admin/{id}', [MenuController::class, 'showadmin'])->name('user-profile-admin');
});

// Menu Community
Route::get('/community', [MenuController::class, 'community'])->name('community.index');
Route::get('/network_engineer', [MenuController::class, 'network_engineer'])->name('network_engineer');
Route::get('/database_administrator', [MenuController::class, 'database_administrator'])->name('database_administrator');
Route::get('/frontend', [MenuController::class, 'frontend'])->name('frontend');
Route::get('/data_analyst', [MenuController::class, 'data_analyst'])->name('data_analyst');
Route::get('/backend', [MenuController::class, 'backend'])->name('backend');
Route::get('/web_developer', [MenuController::class, 'web_developer'])->name('web_developer');

// Menu Settings
Route::middleware(['auth'])->group(function () {
    Route::get('/settings', [MenuController::class, 'settings'])->name('settings');
    Route::post('/update-email', [MenuController::class, 'updateEmail'])->name('update-email');
    Route::post('/update-password', [MenuController::class, 'updatePassword'])->name('update-password');
});

// Menu Contact Us
Route::get('/contactus', [MenuController::class, 'contact_us'])->name('contactus');
Route::get('/contactusadmin', [MenuController::class, 'contactusadmin'])->name('contactusadmin');
Route::post('/contact-us/store', [MenuController::class, 'store'])->name('store-contactus');