<?php

namespace Celysium\Sms;

use Celysium\Sms\Contracts\SmsInterface;
use Celysium\Sms\Drivers\Kavenegar;
use Celysium\Sms\Drivers\Payam;

class Sms
{
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
