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
    public static function driver($driver = null): SmsInterface
    {
        $driver = $driver ?: config('sms.default');

        return match (strtolower($driver)) {
            'kavenegar' => new Kavenegar(),
            'payam' => new Payam()
        };
    }
}
