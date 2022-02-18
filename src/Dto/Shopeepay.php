<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Shopeepay extends DataTransferObject
{
    public ?string $callback_url;
}
