<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DocteurController;
use App\Http\Controllers\PatientController;
use App\Http\Controllers\RendezvousController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\SpecialiteController;
use App\Http\Controllers\SecretaireController;



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


Route::resource('docteur', DocteurController::class);
Route::get('supprimer-docteur/{id}', [DocteurController::class, 'destroy']);

Route::resource('patient', PatientController::class);
Route::get('supprimer-patient/{id}', [PatientController::class, 'destroy']);

Route::resource('rendezvous', RendezvousController::class);
Route::get('supprimer-rendezvous/{id}', [RendezvousController::class, 'destroy']);

Route::resource('service', ServiceController::class);
Route::get('supprimer-service/{id}', [ServiceController::class, 'destroy']);

Route::resource('specialite', SpecialiteController::class);
Route::get('supprimer-specialite/{id}', [SpecialiteController::class, 'destroy']);

Route::resource('secretaire', SecretaireController::class);
Route::get('supprimer-secretaire/{id}', [SecretaireController::class, 'destroy']);



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
