<?php

use App\Http\Controllers\FrontOfficeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', FrontOfficeController::class . '@index')->name('index');

Route::get('/projects', FrontOfficeController::class . '@projects')->name('projects.index');
Route::get('/projects-detail', FrontOfficeController::class . '@projectDetail')->name('project.detail');
Route::get('/projects-h-kitchen', FrontOfficeController::class . '@projectHkitchen')->name('project.Hkitchen');
Route::get('/projects-i-house', FrontOfficeController::class . '@projectIhouse')->name('project.Lhouse');
Route::get('/projects-r-house', FrontOfficeController::class . '@projectRhouse')->name('project.Rhouse');
Route::get('/projects-i-petclinic', FrontOfficeController::class . '@projectIpetclinic')->name('project.Lpetclinic');
Route::get('/projects-ms-diana', FrontOfficeController::class . '@projectMsDiana')->name('project.MsDiana');
Route::get('/projects-b-purygalaxy', FrontOfficeController::class . '@projectBPuryGalaxy')->name('project.BPuryGalaxy');
Route::get('/projects-ng-house', FrontOfficeController::class . '@projectNgHouse')->name('project.NgHouse');
Route::get('/projects-ns-house', FrontOfficeController::class . '@projectNsHouse')->name('project.NsHouse');

Route::get('/cekRelasi', function(){
    return 'cek';
});


Route::get('/blog', FrontOfficeController::class . '@blog')->name('blog.index');
Route::get('/blog-detail', FrontOfficeController::class . '@blogDetail')->name('blog.detail');
Route::get('/small-space-101', FrontOfficeController::class. '@blog_a')->name('blog.a');
Route::get('/Affordable-elegance:Bugdet-Makeovers-with-ready-made-panels-for-interior-remodeling', FrontOfficeController::class. '@blog_b')->name('blog.b');
Route::get('/The-science-of-color-combination', FrontOfficeController::class. '@blog_c')->name('blog.c');

Route::get('/contact', FrontOfficeController::class . '@contact')->name('contact.index');

Route::get('/about', FrontOfficeController::class . '@about')->name('about.index');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
