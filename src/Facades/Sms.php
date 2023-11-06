<?php

namespace Celysium\Sms\Facades;

use Celysium\Sms\Contracts\SmsInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static SmsInterface driver($driver = null)
 * @method static SmsInterface to(string $number)
 * @method static SmsInterface send(array $data)
 * @method static SmsInterface otp(array $data)
 */
class Sms extends Facade
{
    /**
     * @return string
     */
    protected static function getFacadeAccessor(): string
    {
        return 'sms';
    }
}
