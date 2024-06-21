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
        $this->app->bind('math', function () {
            return new MathService();
        });

        // Register enum classes (if they need to be registered as providers)
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
