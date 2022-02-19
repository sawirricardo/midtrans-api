<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class CustomerDetails extends DataTransferObject
{
    public ?string $first_name = null;
    public ?string $last_name = null;
    public ?string $email = null;
    public ?string $phone = null;
    public ?BillingAddress $billing_address = null;
    public ?ShippingAddress $shipping_address = null;
}
