<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::prefix('zoho')->group(function(){
    Route::get('authorization_code', [App\Http\Controllers\Api\SohoController::class, 'auth'])->name('soho.authorization_code');
    Route::get('refresh_token', [App\Http\Controllers\Api\SohoController::class, 'refresh_token'])->name('soho.refresh_token');
});

Route::prefix('credly')->group(function(){
    Route::get('getAuthorizationCode', [App\Http\Controllers\Api\CredlyController::class, 'getAuthorizationCode'])->name('credly.getAuthorizationCode');
    Route::get('results', [App\Http\Controllers\Api\CredlyController::class, 'results'])->name('credly.results');
});
