<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class SnapTokenDto extends DataTransferObject
{
    public string $token;
    public string $redirect_url;
}
