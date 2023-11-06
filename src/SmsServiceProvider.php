<?php

namespace Celysium\Sms;

use Illuminate\Support\ServiceProvider;

class SmsServiceProvider extends ServiceProvider
{
    public function register(): void
    {

        $this->app->bind('sms', function () {
            return new Sms();
        });

        $this->mergeConfigFrom(__DIR__ . '/../config/sms.php', 'sms');
        $this->publishes([__DIR__ . '/../config/sms.php' => config_path('sms.php')], 'config');
    }
}
