<?php

namespace Artiden\Blacklist;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\App;

class BlackListServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        App::bind('BlackList', function() {
            return new BlackList;
        });
    }
}
