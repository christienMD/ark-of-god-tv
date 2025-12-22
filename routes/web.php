<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Web\HomeController;
use App\Http\Controllers\Web\LiveController;
use App\Http\Controllers\Web\AboutController;
use App\Http\Controllers\Web\EventController;
use App\Http\Controllers\Web\BranchController;
use App\Http\Controllers\Web\VisitController;
use App\Http\Controllers\Web\PartnershipController;
use App\Http\Controllers\Web\BlogController;
use App\Http\Controllers\Web\ContactController;
use App\Http\Controllers\Web\GiveController;
use App\Http\Controllers\Web\JohnChiFoundationController;
use App\Http\Controllers\Web\LandingController;

// Landing Page (Root - First page users see)
Route::get('/', [LandingController::class, 'index'])->name('landing');

// Home/Ministry
Route::get('/home', [HomeController::class, 'index'])->name('home');

// Live/Sermons
Route::get('/live', [LiveController::class, 'index'])->name('live.index');
Route::get('/live/{id}', [LiveController::class, 'show'])->name('live.show');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Events
Route::get('/events', [EventController::class, 'index'])->name('events');

// Branches
Route::get('/branches', [BranchController::class, 'index'])->name('branches.index');
Route::get('/branches/{slug}', [BranchController::class, 'show'])->name('branches.show');

// Visit
Route::get('/visit', [VisitController::class, 'index'])->name('visit');

// Partnership
Route::get('/partnership', [PartnershipController::class, 'index'])->name('partnership');

// Blogs
Route::get('/blogs', [BlogController::class, 'index'])->name('blogs.index');
Route::get('/blogs/{slug}', [BlogController::class, 'show'])->name('blogs.show');

// Contact
Route::get('/contact', [ContactController::class, 'index'])->name('contact');

// Give
Route::get('/give', [GiveController::class, 'index'])->name('give');

// John Chi Foundation
Route::get('/john-chi-foundation', [JohnChiFoundationController::class, 'index'])->name('john-chi-foundation');
