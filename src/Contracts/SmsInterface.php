<?php

namespace Celysium\Sms\Contracts;

use Illuminate\Http\Client\Response;

interface SmsInterface
{
    public function to(string $number): void;

    public function send(array $data): Response;

    public function otp(array $data): Response;
}
