<?php

namespace Math\MathProv;

use Illuminate\Support\ServiceProvider;
use Math\Enums\MathOperatorEnum;
use Math\Enums\MathPowerEnum;
use Math\Enums\MathRootEnum;

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
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->registerProviders();
    }

    /**
     * Register the providers.
     *
     * @return void
     */
    protected function registerProviders()
    {
        foreach ($this->providers as $provider) {
            $this->app->register($provider);
        }
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
