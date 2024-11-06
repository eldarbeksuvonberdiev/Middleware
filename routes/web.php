<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\CreateMiddleware;
use App\Http\Middleware\DeleteMiddleware;
use App\Http\Middleware\ReadMiddleware;
use App\Http\Middleware\UpdateMiddleware;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', [UserController::class, 'index'])->name('user')->middleware('auth');
Route::get('/post', [PostController::class, 'index'])->name('post');
Route::get('/student', [StudentController::class, 'index'])->name('student');


Route::middleware(CreateMiddleware::class . ':admin,create')->group(function () {
    Route::post('/create', [UserController::class, 'store'])->name('user.create');
    Route::post('/student-create', [StudentController::class, 'store'])->name('student.create');
    Route::post('/post-create', [PostController::class, 'store'])->name('post.create');
});


Route::middleware(ReadMiddleware::class . ':admin,read')->group(function () {
    Route::get('/show/{user}', [UserController::class, 'show'])->name('user.show');
    Route::get('/student-show/{student}', [StudentController::class, 'show'])->name('student.show');
    Route::get('/post-show/{post}', [PostController::class, 'show'])->name('post.show');
});


Route::middleware(UpdateMiddleware::class . ':admin,update')->group(function () {
    Route::put('/update/{user}', [UserController::class, 'update'])->name('user.update');
    Route::put('/student-update/{student}', [StudentController::class, 'update'])->name('student.update');
    Route::put('/post-update/{post}', [PostController::class, 'update'])->name('post.update');
});


Route::middleware(DeleteMiddleware::class . ':admin,create')->group(function () {
    Route::delete('/student-delete/{student}', [StudentController::class, 'destroy'])->name('student.delete');
    Route::delete('/delete/{user}', [UserController::class, 'destroy'])->name('user.delete');
    Route::delete('/post-delete/{post}', [PostController::class, 'destroy'])->name('post.delete');
});



Route::get('/login', [AuthController::class, 'loginPage'])->name('tologin');
Route::post('/login', [AuthController::class, 'login'])->name('login');

Route::get('/register', [AuthController::class, 'registerPage'])->name('toregister');
Route::post('/register', [AuthController::class, 'register'])->name('register');

Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
