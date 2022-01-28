<?php

use Illuminate\Support\Facades\Route;

Route::post('loginpost', [App\Http\Controllers\Admin\LoginController::class,'indexPost'])->name('login.post');
Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('login.logout');
Route::get('loginall', [App\Http\Controllers\Admin\LoginController::class,'indexall'])->name('login.all');
Route::resource('login', App\Http\Controllers\Admin\LoginController::class);
Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin');
    Route::resource('home', App\Http\Controllers\Admin\HomeController::class);
    Route::get('home/counter/index', [App\Http\Controllers\Admin\HomeController::class, 'counter'])->name('home.counter');
    Route::get('home/popup/index', [App\Http\Controllers\Admin\HomeController::class, 'popup'])->name('home.popup');
    Route::get('home/sliders/home', [App\Http\Controllers\Admin\HomeController::class, 'slidersHome'])->name('home.sliders');
    Route::get('home/sliders/corretaje', [App\Http\Controllers\Admin\HomeController::class, 'slidersCorretaje'])->name('corretaje.sliders');
    Route::get('home/sliders/project', [App\Http\Controllers\Admin\HomeController::class, 'slidersProject'])->name('project.sliders');
    Route::get('home/sliders/contact', [App\Http\Controllers\Admin\HomeController::class, 'slidersContact'])->name('contact.sliders');
    Route::get('home/sliders/blog', [App\Http\Controllers\Admin\HomeController::class, 'slidersBlog'])->name('blog.sliders');
    Route::resource('aboutus', App\Http\Controllers\Admin\AboutusController::class);
    Route::get('aboutus/sliders/we', [App\Http\Controllers\Admin\AboutusController::class, 'slidersWe'])->name('we.sliders');
    Route::get('aboutus/history/index', [App\Http\Controllers\Admin\AboutusController::class, 'history'])->name('aboutus.history');
    Route::get('aboutus/detail/index', [App\Http\Controllers\Admin\AboutusController::class, 'detail'])->name('aboutus.detail');
    Route::resource('services', App\Http\Controllers\Admin\ServiceController::class);
    Route::get('services/slider/index', [App\Http\Controllers\Admin\ServiceController::class, 'slider'])->name('services.slider');
    Route::get('services/text/index', [App\Http\Controllers\Admin\ServiceController::class, 'text'])->name('services.text');
    Route::resource('sell', App\Http\Controllers\Admin\SellController::class);
    Route::get('sell/slider/index', [App\Http\Controllers\Admin\SellController::class, 'slider'])->name('sell.slider');
    Route::get('sell/step/index', [App\Http\Controllers\Admin\SellController::class, 'step'])->name('sell.step');
    Route::get('sell/term/index', [App\Http\Controllers\Admin\SellController::class, 'term'])->name('sell.term');
    Route::resource('customerstestimonials', App\Http\Controllers\Admin\CustomerTestimonialController::class);
    Route::resource('servicestestimonials', App\Http\Controllers\Admin\ServiceTestimonialController::class);
    Route::resource('workerstestimonials', App\Http\Controllers\Admin\WorkerTestimonialController::class);
    Route::resource('posts', App\Http\Controllers\Admin\PostController::class);

    Route::resource('districts', App\Http\Controllers\Admin\DistrictController::class);
    Route::resource('typeprojects', App\Http\Controllers\Admin\TypeProjectController::class);
    Route::resource('typeproperties', App\Http\Controllers\Admin\TypePropertyController::class);
    Route::resource('enviroments', App\Http\Controllers\Admin\EnviromentController::class);
    Route::resource('projects', App\Http\Controllers\Admin\ProjectController::class);
    Route::resource('corretajes', App\Http\Controllers\Admin\CorretajeController::class);

    Route::resource('records', App\Http\Controllers\Admin\RecordController::class)->only(['index']);
    Route::get('records/excel', [App\Http\Controllers\Admin\RecordController::class, 'excel'])->name('records.excel');

});
