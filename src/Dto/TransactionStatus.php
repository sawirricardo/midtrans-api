<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class TransactionStatus extends DataTransferObject
{
    public ?string $transaction_time = null;
    public ?string $transaction_status = null;
    public ?string $transaction_id = null;
    public ?string $status_message = null;
    public ?string $status_code = null;
    public ?string $signature_key = null;
    public ?string $payment_type = null;
    public ?string $order_id = null;
    public ?string $merchant_id = null;
    public ?string $masked_card = null;
    public ?string $gross_amount = null;
    public ?string $fraud_status = null;
    public ?string $eci = null;
    public ?string $currency = null;
    public ?string $channel_response_message = null;
    public ?string $channel_response_code = null;
    public ?string $card_type = null;
    public ?string $bank = null;
    public ?string $approval_code = null;
}
