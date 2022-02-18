<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class FreeText extends DataTransferObject
{
	/** @var \Sawirricardo\Midtrans\Dto\Inquiry[] $inquiry */
	public array $inquiry;

	/** @var \Sawirricardo\Midtrans\Dto\Payment[] $payment */
	public array $payment;
}
