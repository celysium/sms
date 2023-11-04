<?php

namespace Celysium\MessageBroker\Facades;

use Celysium\MessageBroker\Contracts\SmsInterface;
use Illuminate\Support\Facades\Facade;

/**
 * @method static SmsInterface receiver(string $to)
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