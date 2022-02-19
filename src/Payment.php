<?php

namespace Sawirricardo\Midtrans;

use Sawirricardo\Midtrans\Dto\TransactionStatus;
use Symfony\Component\HttpClient\HttpClient;

class Payment
{
    private $baseUrl;
    private $authString;

    public function __construct($baseUrl, $authString)
    {
        $this->baseUrl = $baseUrl;
        $this->authString = $authString;
    }

    public function getStatus($orderIdOrTransactionId)
    {
        $client = HttpClient::create();
        $response = $client->request('GET', $this->baseUrl . '/' . $orderIdOrTransactionId . '/status', [
            'headers' => [
                'Accept' => 'application/json',
                'Content-Type' => 'application/json',
                'Authorization' => 'Basic ' . $this->authString,
            ],
        ]);

        return new TransactionStatus($response->toArray());
    }
}
