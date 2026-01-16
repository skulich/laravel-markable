<?php

declare(strict_types=1);

namespace SKulich\Markable;

use Illuminate\Routing\Router;
use Illuminate\Support\ServiceProvider as BaseServiceProvider;

final class MarkableServiceProvider extends BaseServiceProvider
{
    public function boot(Router $router): void
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../database/migrations/create_marks_table.php.stub' => $this->getMigrationFileName(),
            ], 'markable-migrations');

            $this->publishes([
                __DIR__.'/../config/markable.php' => config_path('markable.php'),
            ], 'markable-config');
        }

        /*Blueprint::macro('markableCounters', function (array $types) {
            foreach ($types as $type) {
                $this->integer("{$type}s_count")->default(0);
            }
        });*/
    }

    public function register(): void
    {
        $this->mergeConfigFrom(__DIR__.'/../config/markable.php', 'markable');
    }

    protected function getMigrationFileName(): string
    {
        $timestamp = now()->addSecond()->format('Y_m_d_His');

        return database_path("migrations/{$timestamp}_create_marks_table.php");
    }
}
