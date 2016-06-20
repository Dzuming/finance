<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ComposerProvider extends ServiceProvider
{
    public function boot()
    {
        view()->composer("*", "App\Http\ViewComposers\RecentModifiedComposer");
    }
     public function register()
     {
        //
        }
}
