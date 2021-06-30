<?php

use App\Http\Controllers\ThreadController;
use Illuminate\Support\Facades\Route;

Route::get('/threads', [ ThreadController::class, 'index']);
Route::get('/thread/create', [ ThreadController::class, 'edit']);

