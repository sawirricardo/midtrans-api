<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class TransactionDetails extends DataTransferObject
{
    public string $order_id;
    public int $gross_amount;
}
