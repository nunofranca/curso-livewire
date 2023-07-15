<?php

use App\Http\Livewire\Dashboard\Dashboard;
use App\Http\Livewire\Post\ListPost;
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


Route::prefix('painel')->name('panel.')->group(function (){
    Route::get('dashboard', Dashboard::class)->name('dashboard');


    Route::prefix('posts')->name('posts.')->group(function (){
        Route::get('/', ListPost::class)->name('list');
    });

});



