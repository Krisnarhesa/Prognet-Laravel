<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FormulirController;

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
    return view('home');
});

Route::get('/BiodataForm', [FormulirController::class, 'create'])->name('Student Biodata Form');
Route::post('/BiodataForm', [FormulirController::class, 'store'])->name('Store Student Biodata');
Route::get('/StudentListData', [FormulirController::class, 'index'])->name('Student Data List');
Route::get('/DetailStudentData/{id}', [FormulirController::class, 'show'])->name('Show Student Data');
Route::get('/StudentData/{id}/edit', [FormulirController::class, 'edit'])->name('Edit Student Data');
Route::put('/UpdateStudentData/{id}', [FormulirController::class, 'update'])->name('Update Student Data');
Route::delete('/DeleteStudentData/{id}', [FormulirController::class, 'destroy'])->name('Delete Student Data');