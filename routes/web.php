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
Route::get('curso/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'curso'])->name('curso');
Route::get('equipo', [App\Http\Controllers\Web\WebController::class, 'equipo'])->name('equipo');
Route::get('soporte', [App\Http\Controllers\Web\WebController::class, 'soporte'])->name('soporte');
Route::get('contacto', [App\Http\Controllers\Web\WebController::class, 'contacto'])->name('contacto');
Route::get('recomendaciones', [App\Http\Controllers\Web\WebController::class, 'recomendaciones'])->name('recomendaciones');
Route::get('terminos-y-condiciones', [App\Http\Controllers\Web\WebController::class, 'terminos_y_condiciones'])->name('terminos-y-condiciones');
Route::get('politicas-y-privacidad', [App\Http\Controllers\Web\WebController::class, 'politicas'])->name('politicas');
Route::get('manual-del-alumno', [App\Http\Controllers\Web\WebController::class, 'manual_alumno'])->name('manual.alumno');
Route::get('libro-de-reclamaciones', [App\Http\Controllers\Web\WebController::class, 'libro_reclamaciones'])->name('libro.reclamaciones');
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
Route::get('responsabilidad-social/programa-de-participacion', [App\Http\Controllers\Web\WebController::class, 'responsabilidad_social_programa_de_participacion'])->name('responsabilidad-social-programa-de-participacion');
Route::get('preguntas-frecuentes', [App\Http\Controllers\Web\WebController::class, 'preguntas_frecuentes'])->name('preguntas-frecuentes');
Route::get('asesoria-especializada', [App\Http\Controllers\Web\WebController::class, 'asesoria_especializada'])->name('asesoria-especializada');
Route::get('capacitaciones-corporativas', [App\Http\Controllers\Web\WebController::class, 'capacitaciones_corporativas'])->name('capacitaciones-corporativas');
Route::get('egresados', [App\Http\Controllers\Web\WebController::class, 'egresados'])->name('egresados');
Route::get('verifica-tu-certificacion', [App\Http\Controllers\Web\WebController::class, 'verifica_certificacion'])->name('verifica-tu-certificacion');
Route::get('insignia-adquirida/{hash}', [App\Http\Controllers\Web\WebController::class, 'insignia_adquirida'])->name('insignia-adquirida');
Route::get('certificado-adquirido', [App\Http\Controllers\Web\WebController::class, 'certificado_adquirido'])->name('certificado-adquirido');
Route::get('modelo-educativo', [App\Http\Controllers\Web\WebController::class, 'modelo_educativo'])->name('modelo-educativo');
Route::get('nosotros', [App\Http\Controllers\Web\WebController::class, 'nosotros'])->name('nosotros');

Route::post('postIndex', [App\Http\Controllers\Web\WebController::class, 'postIndex'])->name('postIndex');
Route::post('postCurso', [App\Http\Controllers\Web\WebController::class, 'postCurso'])->name('postCurso');
Route::post('postContacto', [App\Http\Controllers\Web\WebController::class, 'postContacto'])->name('postContacto');
Route::post('postCorporativo', [App\Http\Controllers\Web\WebController::class, 'postCorporativo'])->name('postCorporativo');
Route::post('postLibro', [App\Http\Controllers\Web\WebController::class, 'postLibro'])->name('postLibro');

Route::prefix('/blog')->group(function(){
    Route::get('/', [App\Http\Controllers\Web\WebController::class, 'blog'])->name('blog');
    Route::get('tag/{slug}', [App\Http\Controllers\Web\WebController::class, 'tag'])->name('tag');
    Route::get('{category}/{slug}/{id}', [App\Http\Controllers\Web\WebController::class, 'post'])->name('post');
});

Route::prefix('/myaccount')->group(function(){
    Route::get('forget-password', [App\Http\Controllers\Web\LoginController::class, 'getForget'])->name('login.forget');
    Route::post('forget-password', [App\Http\Controllers\Web\LoginController::class, 'postForget'])->name('login.forget');
    Route::get('reset-password/{token}', [App\Http\Controllers\Web\LoginController::class, 'getReset'])->name('login.reset');
    Route::post('reset-password', [App\Http\Controllers\Web\LoginController::class, 'postReset'])->name('login.reset');
    Route::post('loginPost', [App\Http\Controllers\Web\LoginController::class, 'login'])->name('login.login');
    Route::resource('login', App\Http\Controllers\Web\LoginController::class);
});

Route::group(['middleware' => ['auth:user'] ], function () {
    //Route::get('/dashboard', [AuthController::class,"dashboard"]);
    Route::get('logout', [App\Http\Controllers\Web\LoginController::class, 'logout'])->name('logout');
    Route::get('myaccount/welcome', [App\Http\Controllers\Web\ProfileController::class, 'welcome'])->name('profile.welcome');
    Route::get('myaccount/shopping', [App\Http\Controllers\Web\ProfileController::class, 'shopping'])->name('profile.shopping');
    Route::put('myaccount/profile_invoice/{id}', [App\Http\Controllers\Web\ProfileController::class, 'update_invoice'])->name('profile.update_invoice');
    Route::resource('myaccount/profile', App\Http\Controllers\Web\ProfileController::class);
    Route::get('checkout/cart', [App\Http\Controllers\Web\CheckoutController::class, 'index'])->name('checkout.cart');
    Route::post('checkout/payment', [App\Http\Controllers\Web\CheckoutController::class, 'payment'])->name('checkout.payment');
    Route::post('checkout/confirmation', [App\Http\Controllers\Web\CheckoutController::class, 'confirmation'])->name('checkout.confirmation');
});

Route::post('addpromo', [App\Http\Controllers\Web\CheckoutController::class, 'addpromo'])->name('addpromo');
Route::delete('deletepromo', [App\Http\Controllers\Web\CheckoutController::class, 'deletepromo'])->name('deletepromo');
Route::post('addtocart', [App\Http\Controllers\Web\CheckoutController::class, 'addToCart'])->name('addToCart');
Route::delete('removefromcart', [App\Http\Controllers\Web\CheckoutController::class, 'removeFromCart'])->name('removeFromCart');
Route::patch('updatecart', [App\Http\Controllers\Web\CheckoutController::class, 'updateCart'])->name('updateCart');

Route::post('loginPostJob', [App\Http\Controllers\Web\LoginJobController::class, 'loginJob'])->name('login.login.job');
Route::post('bolsa-de-trabajo/createPerson', [App\Http\Controllers\Web\LoginJobController::class, 'createPerson'])->name('jobbank.person');
Route::post('bolsa-de-trabajo/createCompany', [App\Http\Controllers\Web\LoginJobController::class, 'createCompany'])->name('jobbank.company');
Route::get('bolsa-de-trabajo', [App\Http\Controllers\Web\LoginJobController::class, 'bolsa_trabajo'])->name('bolsa.trabajo');
Route::get('bolsa-de-trabajo/registro/postulante', [App\Http\Controllers\Web\LoginJobController::class, 'bolsa_trabajo_registro_postulante'])->name('bolsa.trabajo.registro.postulante');
Route::get('bolsa-de-trabajo/registro/empresa', [App\Http\Controllers\Web\LoginJobController::class, 'bolsa_trabajo_registro_empresa'])->name('bolsa.trabajo.registro.empresa');

Route::get('bolsa-de-trabajo/seleccionar', [App\Http\Controllers\Web\JobBankController::class, 'bolsa_seleccionar'])->name('bolsa.seleccionar');
Route::get('bolsa-de-trabajo/ver-anuncios/postulantes', [App\Http\Controllers\Web\JobBankController::class, 'ver_anuncios_postulantes'])->name('bolsa.ver-anuncios.postulantes');
Route::get('bolsa-de-trabajo/ver-anuncios/empresas', [App\Http\Controllers\Web\JobBankController::class, 'ver_anuncios_empresas'])->name('bolsa.ver-anuncios.empresas');
Route::get('bolsa-de-trabajo/postulante/{slug}/{id}', [App\Http\Controllers\Web\JobBankController::class, 'anuncio_postulante'])->name('bolsa.anuncio.postulante');
Route::get('bolsa-de-trabajo/empresa/{slug}/{id}', [App\Http\Controllers\Web\JobBankController::class, 'anuncio_empresa'])->name('bolsa.anuncio.empresa');

Route::group(['middleware' => ['auth:jobbank'] ], function () {
    Route::put('bolsa-de-trabajo/perfil/update/{id}', [App\Http\Controllers\Web\ProfileController::class, 'updateJobUser'])->name('bolsa.trabajo.perfil.update');
    Route::put('bolsa-de-trabajo/perfil/updateCompany/{id}', [App\Http\Controllers\Web\ProfileController::class, 'updateJobCompany'])->name('bolsa.trabajo.perfil.updateCompany');
    Route::put('bolsa-de-trabajo/perfil/update_password/{id}', [App\Http\Controllers\Web\ProfileController::class, 'updateJobUserPass'])->name('bolsa.trabajo.perfil.updatePass');
    Route::get('bolsa-de-trabajo/perfil/postulante', [App\Http\Controllers\Web\JobBankController::class, 'bolsa_trabajo_perfil_postulante'])->name('bolsa.trabajo.perfil.postulante');
    Route::get('bolsa-de-trabajo/perfil/empresa', [App\Http\Controllers\Web\JobBankController::class, 'bolsa_trabajo_perfil_empresa'])->name('bolsa.trabajo.perfil.empresa');
    Route::get('bolsa-de-trabajo/configuracion', [App\Http\Controllers\Web\JobBankController::class, 'bolsa_trabajo_configuracion'])->name('bolsa.trabajo.configuracion');
    Route::get('bolsa-de-trabajo/postulaciones', [App\Http\Controllers\Web\JobBankController::class, 'bolsa_trabajo_postulaciones'])->name('bolsa.trabajo.postulaciones');
    Route::resource('bolsa-de-trabajo/ofertas', App\Http\Controllers\Web\JobBankOfferController::class);
    Route::post('bolsa-de-trabajo/postular', [App\Http\Controllers\Web\JobBankController::class, 'applicant'])->name('jobbank.applicant');
    Route::get('bolsa-de-trabajo/logout', [App\Http\Controllers\Web\LoginJobController::class, 'logout'])->name('bolsa.trabajo.logout');
});

Route::get('gracias', [App\Http\Controllers\Web\WebController::class, 'gracias'])->name('gracias');

/****** File Manager ******/

Route::group(['prefix' => 'laravel-filemanager', 'middleware' => ['auth:user']], function () {
    \UniSharp\LaravelFilemanager\Lfm::routes();
});

Route::get("storage-link", function () {
    $targetFolder = storage_path("app/public");
    $linkFolder = $_SERVER['DOCUMENT_ROOT'] . '/storage';
    symlink($targetFolder, $linkFolder);
});