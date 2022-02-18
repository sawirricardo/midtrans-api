<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Installment extends DataTransferObject
{
	public bool $required;
	public Terms $terms;
}
