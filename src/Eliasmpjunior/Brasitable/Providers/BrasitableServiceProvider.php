<?php

namespace Eliasmpjunior\Brasitable\Providers;

use Illuminate\Support\Facades\Log;
use Illuminate\Support\ServiceProvider;

use Eliasmpjunior\Brasitable\Console\Commands\BrasitableInfoCommand;


class BrasitableServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
    	//
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->commands([
                BrasitableInfoCommand::class,
            ]);
        }
    }
}
