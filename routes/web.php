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
Route::get('programas/{slug?}', [App\Http\Controllers\Web\WebController::class, 'programas'])->name('programas');
Route::get('equipo', [App\Http\Controllers\Web\WebController::class, 'equipo'])->name('equipo');
Route::get('soporte', [App\Http\Controllers\Web\WebController::class, 'soporte'])->name('soporte');
Route::get('contacto', [App\Http\Controllers\Web\WebController::class, 'contacto'])->name('contacto');
Route::get('recomendaciones', [App\Http\Controllers\Web\WebController::class, 'recomendaciones'])->name('recomendaciones');
Route::get('terminos-y-condiciones', [App\Http\Controllers\Web\WebController::class, 'terminos_y_condiciones'])->name('terminos-y-condiciones');
Route::get('politicas-y-privacidad', [App\Http\Controllers\Web\WebController::class, 'politicas'])->name('politicas');
Route::get('manual-del-alumno', [App\Http\Controllers\Web\WebController::class, 'manual_alumno'])->name('manual.alumno');
Route::get('libro-de-reclamaciones', [App\Http\Controllers\Web\WebController::class, 'libro_reclamaciones'])->name('libro.reclamaciones');
Route::get('bolsa-de-trabajo', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo'])->name('bolsa.trabajo');
Route::get('bolsa-de-trabajo/perfil', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_perfil'])->name('bolsa.trabajo.perfil');
Route::get('bolsa-de-trabajo/configuracion', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_configuracion'])->name('bolsa.trabajo.configuracion');
Route::get('bolsa-de-trabajo/seleccionar', [App\Http\Controllers\Web\WebController::class, 'bolsa_seleccionar'])->name('bolsa.seleccionar');
Route::get('bolsa-de-trabajo/ver-anuncios', [App\Http\Controllers\Web\WebController::class, 'ver_anuncios'])->name('bolsa.ver-anuncios');
Route::get('bolsa-de-trabajo/anuncio', [App\Http\Controllers\Web\WebController::class, 'anuncio'])->name('bolsa.anuncio');
Route::get('bolsa-de-trabajo/solicitud', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_solicitud'])->name('bolsa.trabajo.solicitud');
Route::get('bolsa-de-trabajo/registro/postulante', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_registro_postulante'])->name('bolsa.trabajo.registro.postulante');
Route::get('bolsa-de-trabajo/registro/empresa', [App\Http\Controllers\Web\WebController::class, 'bolsa_trabajo_registro_empresa'])->name('bolsa.trabajo.registro.empresa');
Route::get('nuestras-certificaciones', [App\Http\Controllers\Web\WebController::class, 'nuestras_certificaciones'])->name('nuestras-certificaciones');
Route::get('insignias-digitales', [App\Http\Controllers\Web\WebController::class, 'insignias_digitales'])->name('insignias-digitales');
Route::get('coleccion-insignias', [App\Http\Controllers\Web\WebController::class, 'coleccion_insignias'])->name('coleccion-insignias');
Route::get('coleccion-insignias/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'insignia'])->name('coleccion-insignias.area');
Route::get('coleccion-insignias/{area}/{category}/{name}/{id}', [App\Http\Controllers\Web\WebController::class, 'ruta_insignias'])->name('insignia');
Route::get('grupo-de-excelencia-academica', [App\Http\Controllers\Web\WebController::class, 'grupo_excelencia'])->name('grupo-excelencia');
Route::get('distinciones', [App\Http\Controllers\Web\WebController::class, 'distinciones'])->name('distinciones');
Route::get('responsabilidad-social/objetivos', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_objetivos'])->name('responsabilidad-social-objetivos');
Route::get('responsabilidad-social/mision', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_mision'])->name('responsabilidad-social-mision');
Route::get('responsabilidad-social/quienes-somos', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_quienes_somos'])->name('responsabilidad-social-quienes-somos');
Route::get('responsabilidad-social/programa-de-becas', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_programa_de_becas'])->name('responsabilidad-social-programa-de-becas');
Route::get('responsabilidad-social/biblioteca-summa', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_biblioteca_summa'])->name('responsabilidad-social-biblioteca-summa');
Route::get('responsabilidad-social/talleres-gratuitos', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_talleres_gratuitos'])->name('responsabilidad-social-talleres-gratuitos');
Route::get('responsabilidad-social/ecoeficiencia', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_ecoeficiencia'])->name('responsabilidad-social-ecoeficiencia');
Route::get('responsabilidad-social/programa-de-donaciones', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_programa_de_donaciones'])->name('responsabilidad-social-programa-de-donaciones');
Route::get('preguntas-frecuentes', [App\Http\Controllers\Web\WebController::class, 'preguntas_frecuentes'])->name('preguntas-frecuentes');
Route::get('asesoria-especializada', [App\Http\Controllers\Web\WebController::class, 'asesoria_especializada'])->name('asesoria-especializada');
Route::get('capacitaciones-corporativas', [App\Http\Controllers\Web\WebController::class, 'capacitaciones_corporativas'])->name('capacitaciones-corporativas');
Route::get('egresados', [App\Http\Controllers\Web\WebController::class, 'egresados'])->name('egresados');
Route::get('verifica-tu-certificacion', [App\Http\Controllers\Web\WebController::class, 'verifica_certificacion'])->name('verifica-tu-certificacion');
Route::get('insignia-adquirida', [App\Http\Controllers\Web\WebController::class, 'insignia_adquirida'])->name('insignia-adquirida');
Route::get('certificado-adquirido', [App\Http\Controllers\Web\WebController::class, 'certificado_adquirido'])->name('certificado-adquirido');
Route::get('modelo-educativo', [App\Http\Controllers\Web\WebController::class, 'modelo_educativo'])->name('modelo-educativo');
Route::get('nosotros', [App\Http\Controllers\Web\WebController::class, 'nosotros'])->name('nosotros');
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