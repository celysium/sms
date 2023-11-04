<?php

namespace Celysium\MessageBroker\Contracts;

interface SmsInterface
{
    public function receiver(string $to);

    public function send(array $data): void;

    public function otp(array $data): void;
}
