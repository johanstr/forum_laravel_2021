<?php

use App\Http\Controllers\Api\ThreadController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
| https://forum.api/api/threads
*/

Route::get('/threads', [ThreadController::class, 'index']);
Route::post('/thread/create', [ThreadController::class, 'store']);
