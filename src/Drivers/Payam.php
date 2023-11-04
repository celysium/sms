<?php

namespace Celysium\MessageBroker\Drivers;

use Celysium\MessageBroker\Contracts\SmsInterface;

class Payam implements SmsInterface
{

    public function receiver(string $to)
    {
        // TODO: Implement receiver() method.
    }

    public function send(array $data): void
    {
        // TODO: Implement send() method.
    }

    public function otp(array $data): void
    {
        // TODO: Implement otp() method.
    }
}