<?php

namespace App\Providers;

use App\Setting;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\View;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        if ($this->app->environment() == 'local') {
            $this->app->register('Kurt\Repoist\RepoistServiceProvider');
        }
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

        $inputVal = [];

        foreach (Setting::all() as $row) {
            $inputVal[$row->group . '[' . $row->name . ']'] = $row->val;
        }

        View::composer('*', function ($view) use ($inputVal) {


//            dd($inputVal);
            $view->with('setting',$inputVal);
        });
    }
}
