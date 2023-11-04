<?php

namespace Celysium\MessageBroker\Drivers;

use Celysium\MessageBroker\Contracts\SmsInterface;
use Illuminate\Support\Facades\Http;

class Kavenegar implements SmsInterface
{

    public function receiver(string $to)
    {
        return $this;
    }

    public function send(array $data): void
    {
        $data  = [
            'receptor' => '',

        ];
        Http::get('https://api.kavenegar.com/v1/613472435563797A37677331D/sms/send.json', $data);
        https://api.kavenegar.com/v1/613472435563797A37677331D/sms/send.json?receptor=09125258596,09128585774&sender=10004346&message=test

    }

    public function otp(array $data): void
    {
        //https://api.kavenegar.com/v1/{API-KEY}/verify/lookup.json
        // TODO: Implement otp() method.
    }
}