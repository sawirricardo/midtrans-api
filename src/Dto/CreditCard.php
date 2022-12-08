<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class CreditCard extends DataTransferObject
{
    public bool $secure;
    public ?string $channel = null;
    public ?string $bank = null;
    public ?Installment $installment = null;

    /** @var string[] */
    public ?array $whitelist_bins = null;
    public ?DynamicDescriptor $dynamic_descriptor = null;
}
