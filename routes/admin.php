<?php

use Illuminate\Support\Facades\Route;

Route::post('loginpost', [App\Http\Controllers\Admin\LoginController::class,'indexPost'])->name('login.post');
Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('login.logout');
Route::get('loginall', [App\Http\Controllers\Admin\LoginController::class,'indexall'])->name('login.all');
Route::resource('login', App\Http\Controllers\Admin\LoginController::class);
Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin');
    Route::resource('pagefields', App\Http\Controllers\Admin\PageFieldController::class)->only(['update']);
    Route::get('pagefields/choose', [App\Http\Controllers\Admin\PageFieldController::class,'choose'])->name('pagefields.choose');
    Route::get('pagefields/achievement', [App\Http\Controllers\Admin\PageFieldController::class,'achievement'])->name('pagefields.achievement');
    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('partners', App\Http\Controllers\Admin\PartnerController::class);
    Route::resource('testimonials', App\Http\Controllers\Admin\TestimonialController::class);
    Route::resource('badges', App\Http\Controllers\Admin\BadgeController::class);
    Route::resource('courses', App\Http\Controllers\Admin\CourseController::class);
    Route::resource('topics', App\Http\Controllers\Admin\TopicController::class);
    Route::resource('course_subareas', App\Http\Controllers\Admin\CourseSubareaController::class);
    Route::resource('course_areas', App\Http\Controllers\Admin\CourseAreaController::class);
    Route::resource('course_categories', App\Http\Controllers\Admin\CourseCategoryController::class);
    Route::resource('worker_managers', App\Http\Controllers\Admin\WorkerManagerController::class);
    Route::resource('worker_teachers', App\Http\Controllers\Admin\WorkerTeacherController::class);
    Route::resource('worker_administrators', App\Http\Controllers\Admin\WorkerAdministratorController::class);
});
