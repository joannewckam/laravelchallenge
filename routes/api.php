<?php

use App\Models\Note;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NotesApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/notes', [NotesApiController::class, 'index']);
Route::post('/notes', [NotesApiController::class, 'store']);
Route::put('/notes/{note}', [NotesApiController::class, 'update']);
Route::delete('/notes/{note}', [NotesApiController::class, 'destroy']);