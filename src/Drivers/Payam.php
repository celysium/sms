<?php

namespace Celysium\MessageBroker\Drivers;

use Celysium\MessageBroker\Contracts\SmsInterface;
use Illuminate\Http\Client\Response;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Log;


class Payam implements SmsInterface
{
    private string $to = '';


    public function to(string $number): void
    {
        $this->to = $number;
    }

    public function send(array $data): Response
    {
        $data = [
            'organization' => config('sms.payam.organization'),
            'username' => config('sms.payam.username'),
            'password' => config('sms.payam.password'),
            'method' => 'send',
            'messages' => [
                [
                    'sender' => config('sms.payam.sender'),
                    'recipient' => $this->to,
                    'body' => $data['message'],
                    'customerId' => $this->to
                ]
            ]
        ];
        Log::debug('PAYAM_SMS_PREPARE_DATA: ', $data);
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->post(config('sms.payam.api'), $data);
        Log::debug('PAYAM_SMS_RESPONSE: ', $response->json());
        return $response;
    }

    public function otp(array $data): Response
    {
        $data = [
            'organization' => config('sms.payam.organization'),
            'username' => config('sms.payam.username'),
            'password' => config('sms.payam.password'),
            'method' => 'send',
            'messages' => [
                [
                    'sender' => config('sms.payam.sender'),
                    'recipient' => $this->to,
                    'body' => $data['message'],
                    'customerId' => $this->to
                ]
            ]
        ];
        Log::debug('PAYAM_SMS_PREPARE_DATA: ', $data);
        $response = Http::withHeaders(['Content-Type' => 'application/json'])->post(config('sms.payam.api'), $data);
        Log::debug('PAYAM_SMS_RESPONSE: ', $response->json());
        return $response;
    }
}