<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCard extends DataTransferObject
{
    public bool $secure;
    public string $channel;
    public string $bank;
    public Installment $installment;

    /** @var string[] */
    public array $whitelist_bins;
    public DynamicDescriptor $dynamic_descriptor;
}
