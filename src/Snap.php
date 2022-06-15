<?php

namespace Sawirricardo\Midtrans;

use Sawirricardo\Midtrans\Connector\SnapConnector;
use Sawirricardo\Midtrans\Dto\SnapTokenDto;
use Sawirricardo\Midtrans\Dto\TransactionDto;
use Sawirricardo\Midtrans\Request\CreateSnapTokenRequest;

class Snap
{
    public function __construct(private string $serverKey, private bool $isProduction = false, private int $version = 2)
    {
    }

    public function create(TransactionDto $transaction): ?SnapTokenDto
    {
        $response = (new SnapConnector($this->serverKey, $this->isProduction))
            ->request(
                (new CreateSnapTokenRequest())->mergeData($transaction->toArray())
            )
            ->send();

        return $response->dto();
    }
}
