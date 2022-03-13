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

Route::get('/', [App\Http\Controllers\Web\WebController::class, 'index'])->name('index');
Route::get('programas', [App\Http\Controllers\Web\WebController::class, 'programas'])->name('programas');
Route::get('equipo', [App\Http\Controllers\Web\WebController::class, 'equipo'])->name('equipo');
Route::get('soporte', [App\Http\Controllers\Web\WebController::class, 'soporte'])->name('soporte');
Route::get('contacto', [App\Http\Controllers\Web\WebController::class, 'contacto'])->name('contacto');
Route::get('politicas-y-privacidad', [App\Http\Controllers\Web\WebController::class, 'politicas'])->name('politicas');
Route::get('manual-del-alumno', [App\Http\Controllers\Web\WebController::class, 'manual_alumno'])->name('manual.alumno');
Route::get('libro-de-reclamaciones', [App\Http\Controllers\Web\WebController::class, 'libro_reclamaciones'])->name('libro.reclamaciones');
Route::get('bolsa-de-trabajo', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo'])->name('bolsa.trabajo');
Route::get('bolsa-de-trabajo/perfil', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_perfil'])->name('bolsa.trabajo.perfil');
Route::get('bolsa-de-trabajo/configuracion', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_configuracion'])->name('bolsa.trabajo.configuracion');
Route::get('bolsa-de-trabajo/ver-anuncios', [App\Http\Controllers\Web\WebController::class, 'ver_anuncios'])->name('ver-anuncios');
Route::get('bolsa-de-trabajo/anuncio', [App\Http\Controllers\Web\WebController::class, 'anuncio'])->name('anuncio');
Route::get('bolsa-de-trabajo/solicitud', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_solicitud'])->name('bolsa.trabajo.solicitud');
Route::get('bolsa-de-trabajo/registro', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_registro'])->name('bolsa.trabajo.registro');
Route::get('nuestras-certificaciones', [App\Http\Controllers\Web\WebController::class, 'nuestras_certificaciones'])->name('nuestras-certificaciones');
Route::get('insignias-digitales', [App\Http\Controllers\Web\WebController::class, 'insignias_digitales'])->name('insignias-digitales');
Route::get('coleccion-insignias', [App\Http\Controllers\Web\WebController::class, 'coleccion_insignias'])->name('coleccion-insignias');
Route::get('insignia', [App\Http\Controllers\Web\WebController::class, 'insignia'])->name('insignia');
Route::get('ruta-insignias', [App\Http\Controllers\Web\WebController::class, 'ruta_insignias'])->name('ruta-insignias');
Route::get('responsabilidad-social/objetivos', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_objetivos'])->name('responsabilidad-social-objetivos');
Route::get('responsabilidad-social/mision', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_mision'])->name('responsabilidad-social-mision');
Route::get('responsabilidad-social/quienes-somos', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_quienes_somos'])->name('responsabilidad-social-quienes-somos');
Route::get('responsabilidad-social/programa-de-becas', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_programa_de_becas'])->name('responsabilidad-social-programa-de-becas');
Route::get('responsabilidad-social/biblioteca-summa', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_biblioteca_summa'])->name('responsabilidad-social-biblioteca-summa');
Route::get('responsabilidad-social/talleres-gratuitos', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_talleres_gratuitos'])->name('responsabilidad-social-talleres-gratuitos');
Route::get('responsabilidad-social/ecoeficiencia', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_ecoeficiencia'])->name('responsabilidad-social-ecoeficiencia');
Route::get('responsabilidad-social/programa-de-donaciones', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_programa_de_donaciones'])->name('responsabilidad-social-programa-de-donaciones');
Route::get('preguntas-frecuentes', [App\Http\Controllers\Web\WebController::class, 'preguntas_frecuentes'])->name('preguntas-frecuentes');
Route::get('curso', [App\Http\Controllers\Web\WebController::class, 'curso'])->name('curso');
Route::get('cart', [App\Http\Controllers\Web\WebController::class, 'cart'])->name('cart');
Route::get('checkout', [App\Http\Controllers\Web\WebController::class, 'checkout'])->name('checkout');
Route::get('gracias', [App\Http\Controllers\Web\WebController::class, 'gracias'])->name('gracias');

Route::prefix('/blog')->group(function(){
    Route::get('/', [App\Http\Controllers\Web\WebController::class, 'blog'])->name('blog');
    Route::get('post', [App\Http\Controllers\Web\WebController::class, 'post'])->name('post');
    //Route::get('/post/{slug}', [App\Http\Controllers\Web\WebController::class, 'post'])->name('post');
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