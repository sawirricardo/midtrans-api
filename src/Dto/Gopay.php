<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Gopay extends DataTransferObject
{
    public bool $enable_callback = true;
    public ?string $callback_url = 'http://gopay.com';
}
