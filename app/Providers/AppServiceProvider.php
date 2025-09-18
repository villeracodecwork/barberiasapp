<?php

namespace App\Providers;

use App\Services\HablameSmsService;
use Illuminate\Support\ServiceProvider;
use Illuminate\Notifications\ChannelManager;
use App\Notifications\Channels\HablameChannel;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(HablameSmsService::class, function ($app) {
            return new HablameSmsService();
        });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        $this->app->make(ChannelManager::class)->extend('hablame', function ($app) {
            return new HablameChannel;
        });
    }
}
