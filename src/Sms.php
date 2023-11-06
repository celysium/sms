<?php

namespace Celysium\Sms;

use Celysium\Sms\Contracts\SmsInterface;
use Celysium\Sms\Drivers\Kavenegar;
use Celysium\Sms\Drivers\Payam;
use Illuminate\Contracts\Container\Container;
use Illuminate\Support\Manager;

class Sms extends Manager
{
    public function __construct(Container $container)
    {
        parent::__construct($container);
    }

    /**
     * @param $driver
     * @return SmsInterface
     */
    public function driver($driver = null): SmsInterface
    {
        $driver = $driver ?: $this->getDefaultDriver();

        return match (strtolower($driver)) {
            'kavenegar' => new Kavenegar(),
            'payam' => new Payam()
        };
    }

    public function getDefaultDriver()
    {
        return config('sms.default');
    }
}
