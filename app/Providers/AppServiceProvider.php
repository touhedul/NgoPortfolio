<?php

namespace App\Providers;

use App\Models\Program;
use App\Models\Team;
use App\Models\User;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

use Schema;

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
        Schema::defaultStringLength(191);
        view()->composer('frontend.*', function($view) {
            $team= Team::where('type','!=','Management')->select('type')->orderBy('id', 'DESC')->get()->groupBy("type")->toArray();
            $management= Team::where('type','=','Management')->select('type')->first();

            $service= Program::select('type')->orderBy('id', 'DESC')->get()->groupBy("type")->toArray();
             $view->with(["team" => $team,'service'=> $service,'management'=>$management]);
         });
    }
}
