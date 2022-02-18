<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class BcaVa extends DataTransferObject
{
	public string $va_number;
	public string $sub_company_code;
	public FreeText $free_text;
}
