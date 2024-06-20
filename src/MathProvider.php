<?php

namespace Math\MathProv;

use Illuminate\Support\ServiceProvider;
use Math\src\MathOperatorEnum;
use Math\src\MathPowerEnum;
use Math\src\MathRootEnum;

class MathProvider extends ServiceProvider
{

    /**
     * The providers for the package.
     *
     * @var array
     */

    protected $providers = [
        MathPowerEnum::class,
        MathRootEnum::class,
        MathOperatorEnum::class,
    ];

    /**
     * Register the services.
     *
     * @return void
     */
    public function register(): void
    {
        $this->registerProviders();
    }

    /**
     * Register the providers.
     *
     * @return void
     */
    protected function registerProviders(): void
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
    }

    /**
     * Bootstrap services.
     */
    public function boot(): void
    {
        //
    }
}
