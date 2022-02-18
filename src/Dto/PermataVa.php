<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class PermataVa extends DataTransferObject
{
	public string $va_number;
	public string $recipient_name;
}
