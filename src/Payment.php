<?php

namespace Sawirricardo\Midtrans;

use Sawirricardo\Midtrans\Connector\PaymentConnector;
use Sawirricardo\Midtrans\Dto\TransactionStatus;
use Sawirricardo\Midtrans\Request\GetPaymentStatusRequest;

class Payment
{
    public function __construct(private string $serverKey, private bool $isProduction = false, private int $version = 2)
    {
    }

    public function Status($orderIdOrTransactionId): TransactionStatus
    {
        $response = (new PaymentConnector($this->serverKey, $this->isProduction))
            ->request(new GetPaymentStatusRequest($orderIdOrTransactionId))
            ->send();

        return $response->dto();
    }
}
