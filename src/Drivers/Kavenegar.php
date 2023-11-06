<?php

namespace Celysium\Sms\Drivers;

use Celysium\Sms\Contracts\SmsInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Kavenegar implements SmsInterface
{
    private string $to = '';

    public function to(string $number): void
    {
        $this->to = $number;
    }

    public function send(array $data): Response
    {
        $key = config('sms.kavenegar.api_key');
        $data = [
            'receptor' => $this->to,
            'message' => $data['message']
        ];
        return Http::withHeaders(['Content-Type' => 'application/json'])->get("https://api.kavenegar.com/v1/$key/sms/send.json", $data);
    }

    public function otp(array $data): Response
    {
        $key = config('sms.kavenegar.api_key');
        $token = config('sms.kavenegar.token');
        $data = [
            'receptor' => $this->to,
            'token' => $token,
            'template' => $data['template']
        ];

        return Http::get("https://api.kavenegar.com/v1/$key/verify/lookup.json", $data);
    }
}