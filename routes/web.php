<?php

use App\Http\Controllers\MainController;
use Illuminate\Support\Facades\Route;

//start game
Route::get('/', [MainController::class, 'startGame'])->name('startGame');
Route::post('/', [MainController::class, 'prepareGame'])->name('prepareGame');

//in game
Route::get('/game', [MainController::class, 'game'])->name('game');
Route::get('/answer/{answer}', [MainController::class, 'answer'])->name('answer');
Route::get('/next_question', [MainController::class, 'nextQuestion'])->name('nextQuestion');

//game over
Route::get('/show_results', [MainController::class, 'showResults'])->name('showResults');
