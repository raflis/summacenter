<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
*/

Route::get('clear-cache', function() {
    $exitCode = Artisan::call('optimize:clear');
    //$exitCode = Artisan::call('config:clear');
    //$exitCode = Artisan::call('cache:clear');
    //$exitCode = Artisan::call('config:cache');
    return 'DONE';
});

Route::get('/egresados', [App\Http\Controllers\Web\WebController::class, 'egresados'])->name('egresados');

Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('index');
Route::get('programas', [App\Http\Controllers\Web\WebController::class, 'programas'])->name('programas');
Route::get('equipo', [App\Http\Controllers\Web\WebController::class, 'equipo'])->name('equipo');
Route::get('nuestras-certificaciones', [App\Http\Controllers\Web\WebController::class, 'nuestras_certificaciones'])->name('nuestras-certificaciones');
Route::get('insignias-digitales', [App\Http\Controllers\Web\WebController::class, 'insignias_digitales'])->name('insignias-digitales');
Route::get('ruta-insignias', [App\Http\Controllers\Web\WebController::class, 'ruta_insignias'])->name('ruta-insignias');
Route::get('curso', [App\Http\Controllers\Web\WebController::class, 'curso'])->name('curso');

Route::prefix('/blog')->group(function(){
    Route::get('/', [App\Http\Controllers\Web\WebController::class, 'blog'])->name('blog');
    Route::get('/post/{slug}', [App\Http\Controllers\Web\WebController::class, 'post'])->name('post');
});

/****** File Manager ******/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['web', 'auth']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get("storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});