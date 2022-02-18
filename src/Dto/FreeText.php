<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class FreeText extends DataTransferObject
{
    /** @var \Sawirricardo\Midtrans\Dto\Inquiry[] */
    public array $inquiry;

    /** @var \Sawirricardo\Midtrans\Dto\Payment[] */
    public array $payment;
}
