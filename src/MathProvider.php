<?php

namespace Math\MathProv;

use Illuminate\Support\ServiceProvider;
use Math\Enums\MathOperatorEnum;
use Math\Enums\MathPowerEnum;
use Math\Enums\MathRootEnum;
use Math\Services\MathService;

class MathProvider extends ServiceProvider
{

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('math', function () {
            return new MathService();
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // Optionally, you can bootstrap any services or configurations here
    }
}
