<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;


Route::get('/', [PageController::class, 'index'])->name('home');


Route::get('/about', [PageController::class, 'about'])->name('about');
Route::get('/menu', [PageController::class, 'menu'])->name('menu');
Route::get('/beans-story', [PageController::class, 'beansStory'])->name('beans-story');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');


Route::get('/menu/{id}', [PageController::class, 'showDrink'])
    ->name('drink.show')
    ->where('id', '[0-9]+');