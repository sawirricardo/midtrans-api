<?php

namespace Sawirricardo\Midtrans;

use Sawirricardo\Midtrans\Dto\SnapTokenDto;
use Sawirricardo\Midtrans\Dto\TransactionDto;
use Symfony\Component\HttpClient\HttpClient;

class Snap
{
    private string $authString;
    private string $baseUrl;
    private bool $isSanitized;
    private bool $is3ds;

    public function __construct(
        $authString,
        $baseUrl,
        $is3ds = true,
        $isSanitized = true,
    ) {
        $this->authString = $authString;
        $this->baseUrl = $baseUrl;
        $this->is3ds = $is3ds;
        $this->isSanitized = $isSanitized;
    }

    public function create(TransactionDto $transaction)
    {
        $client = HttpClient::create();
        $response = $client->request('POST', $this->baseUrl . '/transactions', [
            'json' => $transaction->toArray(),
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $this->authString,
            ],
        ]);

        return new SnapTokenDto($response->toArray());
    }
}
