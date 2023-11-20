<?php

namespace App\Providers;

use App\Models\Admin\Worker;
use App\Models\Admin\Setting;
use Illuminate\Support\Carbon;
use App\Models\Admin\CourseArea;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        /*$this->app->bind('path.public',function(){
            return'/u842821089/domains/mned.online/public_html';
        });*/

        Carbon::setUTF8(true);
        Carbon::setLocale(config('app.locale'));
        setlocale(LC_ALL, 'es_MX', 'es', 'ES', 'es_MX.utf8');

        Paginator::useBootstrap();
        
        view()->composer('web.partials.header',function($view){
            $view->with('worker_managers', Worker::select('position')->where('type', 'manager')->orderBy('order', 'Asc')->distinct('position')->get());
            $view->with('worker_teachers', Worker::select('workers.course_area_id')
                                                    ->join('course_areas', 'workers.course_area_id', '=', 'course_areas.id')
                                                    ->where('workers.type', 'teacher')
                                                    ->distinct('worker.course_area_id')
                                                    ->orderBy('course_areas.name', 'Asc')
                                                    ->get()
                        );
            $view->with('worker_administrators', Worker::select('position')->where('type', 'administration')->orderBy('order', 'Asc')->distinct('position')->get());
            $view->with('course_areas', CourseArea::orderBy('order', 'Asc')->get());
            $view->with('setting', Setting::find(1));
        });

        view()->composer('web.partials.footer',function($view){
            $view->with('setting', Setting::find(1));
        });

        view()->composer('web.partials.whatsapp',function($view){
            $view->with('setting', Setting::find(1));
        });

        view()->composer('web.partials.floating_advertising',function($view){
            $view->with('setting', Setting::find(1));
        });

        view()->composer('web.layout',function($view){
            $view->with('setting', Setting::find(1));
        });
    }
}
