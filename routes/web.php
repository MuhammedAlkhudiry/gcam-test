<?php

use Illuminate\Auth\Events\Registered;
use Illuminate\Support\Facades\Route;
use Inertia\Inertia;

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

Route::get('/', fn() => Inertia::render('Welcome'))->name('welcome');


Route::middleware(['auth:web,HREmployee,HRManager'])->group(function() {
Route::get('/dashboard', function() {
    event(new Registered(auth()->user()));
    return Inertia::render('Dashboard');
})->name('dashboard');
});

require __DIR__ . '/auth.php';
