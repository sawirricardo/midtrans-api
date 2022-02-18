<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class CustomerDetails extends DataTransferObject
{
    public string $first_name;
    public string $last_name;
    public string $email;
    public string $phone;
    public BillingAddress $billing_address;
    public ShippingAddress $shipping_address;
}
