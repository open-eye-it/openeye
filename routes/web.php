<?php

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

Route::get('/', function () {
    $heading_title = 'Home';
    return view('front.home', compact('heading_title'));
})->name('home');
Route::get('about', function () {
    $heading_title = 'About';
    return view('front.about', compact('heading_title'));
})->name('about');
Route::get('what-we-do', function () {
    $heading_title = 'What We Do';
    return view('front.what-we-do', compact('heading_title'));
});
Route::get('portfolio', function () {
    $heading_title = 'Portfolio';
    return view('front.portfolio', compact('heading_title'));
});
Route::get('contact', function () {
    $heading_title = 'Contact';
    return view('front.contact', compact('heading_title'));
});
