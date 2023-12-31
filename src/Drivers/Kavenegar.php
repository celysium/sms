<?php

namespace Celysium\Sms\Drivers;

use Celysium\Sms\Contracts\SmsInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;

class Kavenegar implements SmsInterface
{
    private string $to = '';

    public function to(string $number): self
    {
        $this->to = $number;
        return $this;
    }

    public function send(array $data): Response
    {
        $key = config('sms.kavenegar.api_key');
        $data = [
            'receptor' => $this->to,
            'message'  => $data['message']
        ];
        return Http::withHeaders(['Content-Type' => 'application/json'])->get("https://api.kavenegar.com/v1/$key/sms/send.json", $data);
    }

    public function otp(array $data): Response
    {
        $key = config('sms.kavenegar.api_key');
        $data = array_merge($data, ['receptor' => $this->to]);

        return Http::get("https://api.kavenegar.com/v1/$key/verify/lookup.json", $data);
    }
}