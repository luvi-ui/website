<?php

namespace App\Providers;

use App\Services\BadgeCvaService;
use App\Services\ButtonCvaService;
use App\Services\SheetCvaService;
use App\Services\ToastCvaService;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Str;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(ToastCvaService::class, fn () => ToastCvaService::new());
        $this->app->singleton(BadgeCvaService::class, fn () => BadgeCvaService::new());
        $this->app->singleton(ButtonCvaService::class, fn () => ButtonCvaService::new());
        $this->app->singleton(SheetCvaService::class, fn () => SheetCvaService::new());
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        Model::unguard();
        Blade::anonymousComponentPath(__DIR__.'/../../radix-components', 'radix');
        Str::macro('initials', fn ($value, $sep = ' ', $glue = '') => trim(collect(explode($sep, $value))->map(function ($segment) {
            return $segment[0] ?? '';
        })->join($glue)));
    }
}
