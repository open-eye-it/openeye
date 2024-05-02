<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\ContactMail;

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
    $meta_description = "Open Eye Provide innovative solutions to grow your business.";
    $meta_keyword = 'Open Eye, Open Eye IT, IT Services, IT Business, Website, Web Application, Mobile Application';
    $meta_title = 'Open Eye IT Service';
    return view('front.home', compact('heading_title', 'meta_description', 'meta_keyword', 'meta_title'));
})->name('home');
Route::get('about', function () {
    $heading_title = 'About';
    $meta_description = "Open Eye Provide innovative solutions to grow your business.";
    $meta_keyword = 'Open Eye, Open Eye IT, IT Services, IT Business, Website, Web Application, Mobile Application';
    $meta_title = 'Open Eye IT Service';
    return view('front.about', compact('heading_title', 'meta_description', 'meta_keyword', 'meta_title'));
})->name('about');
Route::get('what-we-do', function () {
    $heading_title = 'What We Do';
    $meta_description = "Open Eye Provide innovative solutions to grow your business.";
    $meta_keyword = 'Open Eye, Open Eye IT, IT Services, IT Business, Website, Web Application, Mobile Application';
    $meta_title = 'Open Eye IT Service';
    return view('front.what-we-do', compact('heading_title', 'meta_description', 'meta_keyword', 'meta_title'));
});
Route::get('portfolio', function () {
    $heading_title = 'Portfolio';
    $meta_description = "Open Eye Provide innovative solutions to grow your business.";
    $meta_keyword = 'Open Eye, Open Eye IT, IT Services, IT Business, Website, Web Application, Mobile Application';
    $meta_title = 'Open Eye IT Service';
    return view('front.portfolio', compact('heading_title', 'meta_description', 'meta_keyword', 'meta_title'));
});
Route::get('contact', function () {
    $heading_title = 'Contact';
    $meta_description = "Open Eye Provide innovative solutions to grow your business.";
    $meta_keyword = 'Open Eye, Open Eye IT, IT Services, IT Business, Website, Web Application, Mobile Application';
    $meta_title = 'Open Eye IT Service';
    return view('front.contact', compact('heading_title', 'meta_description', 'meta_keyword', 'meta_title'));
});
Route::post('contact', function (Request $request) {
    $input = $request->all();
    Mail::to('abhayluva@gmail.com')->send(new ContactMail());
    dd($input);
});
