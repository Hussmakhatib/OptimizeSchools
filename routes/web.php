<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');

// Stubs for now (we’ll build pages next)
Route::view('/services', 'stubs.services')->name('services.index');
Route::view('/results', 'stubs.cases')->name('cases.index');
Route::view('/about', 'stubs.about')->name('about');
Route::view('/resources', 'stubs.resources')->name('resources.index');
Route::view('/lead-magnet', 'stubs.leadmagnet')->name('leadmagnet');
Route::view('/contact', 'stubs.contact')->name('contact');
