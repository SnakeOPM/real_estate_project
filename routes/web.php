<?php

use App\Http\Controllers\Party\UpdateController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Party\IndexController;
use App\Http\Controllers\Party\CreateController;
use App\Http\Controllers\Party\ShowController;
use App\Http\Controllers\Party\StoreController;
use App\Http\Controllers\Party\EditController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/parties', IndexController::class)->name('party.index');
Route::get('/parties/create', CreateController::class)->name('party.create');
Route::post('/parties', StoreController::class)->name('party.store');
Route::get('/parties/{party}', ShowController::class)->name('party.show');
Route::get('/parties/{party}/edit', EditController::class)->name('party.edit');
Route::patch('/parties/{party}', UpdateController::class)->name('party.update');

Route::get('party/invitation/{token}', \App\Http\Controllers\Invitations\ShowController::class)
    ->name('invitation.show');

Route::post('party/invitation', \App\Http\Controllers\Invitations\StoreController::class)
->name('invitation.accept');


require __DIR__.'/auth.php';
