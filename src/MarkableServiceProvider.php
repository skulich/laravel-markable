<?php

declare(strict_types=1);

namespace SKulich\Markable;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class MarkableServiceProvider extends BaseServiceProvider
{
    public function boot(Router $router): void
    {
        $this->publishes([__DIR__.'/../config/markable.php' => config_path('markable.php')], ['markable']);
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/markable.php', 'markable');
    }
}
