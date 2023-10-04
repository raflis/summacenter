<?php

use Illuminate\Support\Facades\Route;

/*Route::post('loginpost', [App\Http\Controllers\Admin\LoginController::class,'indexPost'])->name('login.post');
Route::get('logout', [App\Http\Controllers\Admin\LoginController::class,'logout'])->name('login.logout');
Route::get('loginall', [App\Http\Controllers\Admin\LoginController::class,'indexall'])->name('login.all');
Route::resource('login', App\Http\Controllers\Admin\LoginController::class);*/
Route::prefix('/admin')->group(function(){
    Route::get('/', [App\Http\Controllers\Admin\DashboardController::class, 'dashboard'])->name('admin');
    Route::resource('pagefields', App\Http\Controllers\Admin\PageFieldController::class)->only(['update']);
    Route::get('pagefields/cover_page', [App\Http\Controllers\Admin\PageFieldController::class,'cover_page'])->name('pagefields.cover_page');
    Route::get('pagefields/choose', [App\Http\Controllers\Admin\PageFieldController::class,'choose'])->name('pagefields.choose');
    Route::get('pagefields/achievement', [App\Http\Controllers\Admin\PageFieldController::class,'achievement'])->name('pagefields.achievement');
    Route::get('pagefields/support', [App\Http\Controllers\Admin\PageFieldController::class,'support'])->name('pagefields.support');
    Route::get('pagefields/graduates', [App\Http\Controllers\Admin\PageFieldController::class,'graduates'])->name('pagefields.graduates');
    Route::get('pagefields/aboutus', [App\Http\Controllers\Admin\PageFieldController::class,'aboutus'])->name('pagefields.aboutus');
    Route::get('pagefields/terms_and_conditions', [App\Http\Controllers\Admin\PageFieldController::class,'terms_and_conditions'])->name('pagefields.terms_and_conditions');
    Route::get('pagefields/privacy_policies', [App\Http\Controllers\Admin\PageFieldController::class,'privacy_policies'])->name('pagefields.privacy_policies');
    Route::get('pagefields/responsability', [App\Http\Controllers\Admin\PageFieldController::class,'responsability'])->name('pagefields.responsability');
    Route::get('pagefields/certifications', [App\Http\Controllers\Admin\PageFieldController::class,'certifications'])->name('pagefields.certifications');
    Route::resource('settings', App\Http\Controllers\Admin\SettingController::class)->only(['index', 'update']);
    Route::get('settings/whatsapp', [App\Http\Controllers\Admin\SettingController::class,'whatsapp'])->name('settings.whatsapp');
    Route::resource('sliders', App\Http\Controllers\Admin\SliderController::class);
    Route::resource('partners', App\Http\Controllers\Admin\PartnerController::class);
    Route::resource('alliances', App\Http\Controllers\Admin\AllianceController::class);
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
    Route::resource('blog_tags', App\Http\Controllers\Admin\BlogTagController::class);
    Route::resource('blog_categories', App\Http\Controllers\Admin\BlogCategoryController::class);
    Route::resource('blog_sub_categories', App\Http\Controllers\Admin\BlogSubCategoryController::class);
    Route::resource('blog_posts', App\Http\Controllers\Admin\BlogPostController::class);
    Route::get('records/excel_record', [App\Http\Controllers\Admin\RecordController::class, 'excel_record'])->name('excel.record');
    Route::get('records/excel_contact', [App\Http\Controllers\Admin\RecordController::class, 'excel_contact'])->name('excel.contact');
    Route::get('records/excel_corporate', [App\Http\Controllers\Admin\RecordController::class, 'excel_corporate'])->name('excel.corporate');
    Route::get('records/contacts', [App\Http\Controllers\Admin\RecordController::class, 'contact'])->name('records.contact');
    Route::get('records/corporate', [App\Http\Controllers\Admin\RecordController::class, 'corporate'])->name('records.corporate');
    Route::resource('records', App\Http\Controllers\Admin\RecordController::class);
    Route::get('sales/excel', [App\Http\Controllers\Admin\SaleController::class, 'excel'])->name('sales.excel');
    Route::resource('sales', App\Http\Controllers\Admin\SaleController::class);
    Route::resource('promos', App\Http\Controllers\Admin\PromoController::class);
});
