<?php

use Illuminate\Support\Facades\Route;
use App\http\Controllers\HomeController;

// Route::get('/', function () {
//     return view('index'); // merujuk ke file welocome.blade.php di folder resources view
// });

// Route::get('/welcome', function () {
//     return view('welcome'); // merujuk ke file welocome.blade.php di folder resources view
// });

// Route::get('/login', function () {
//     return view('login'); // merujuk ke file welocome.blade.php di folder resources view
// });

// Route::get('/about', function () {
//     return view('about'); // merujuk ke file welocome.blade.php di folder resources view
// });

Route::get('index', [HomeController::class, 'index'])->name('home');
Route::get('login', [HomeController::class, 'login'])->name('login');
Route::get('about', [HomeController::class, 'about'])->name('about');