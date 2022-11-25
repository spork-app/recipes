<?php

namespace Spork\Food;

use Illuminate\Support\Facades\Route;
use Illuminate\Support\ServiceProvider;
use Spork\Core\Spork;
use Spork\Food\Contracts\Services\HelloFreshServiceInterface;
use Spork\Food\Services\HelloFreshService;

class FoodServiceProvider extends ServiceProvider
{
    public function register()
    {
//        Spork::addFeature('Food', 'ChunkIcon', '/food', 'tool');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->mergeConfigFrom(__DIR__ . '/../config/spork.php', 'spork.food');
        if (config('spork.food.enabled')) {
            Route::middleware($this->app->make('config')->get('spork.food.middleware', ['web', 'auth:sanctum']))
                ->prefix('api/food')
                ->group(__DIR__.'/../routes/web.php');
        }
        $this->app->bind(HelloFreshServiceInterface::class, HelloFreshService::class);
    }
}
