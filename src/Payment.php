<?php

namespace Sawirricardo\Midtrans;

use Sawirricardo\Midtrans\Dto\TransactionStatus;
use Symfony\Component\HttpClient\HttpClient;

class Payment
{
    private $baseUrl;

    public function __construct($baseUrl)
    {
        $this->baseUrl = $baseUrl;
    }

    public function getStatus($orderIdOrTransactionId)
    {
        $client = HttpClient::create();
        $response = $client->request('GET', $this->baseUrl . '/' . $orderIdOrTransactionId . '/status', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
            ],
        ]);

        return new TransactionStatus($response->toArray());
    }
}
