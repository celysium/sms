<?php

namespace Celysium\MessageBroker;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function register(): void
    {

        $this->app->bind('sms', function ($app) {
            return new Sms($app);
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/sms.php', 'sms');
        $this->publishes([__DIR__ . '/../config/sms.php' => config_path('sms.php')], 'config');
    }
}
