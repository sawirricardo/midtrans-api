<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class DynamicDescriptor extends DataTransferObject
{
	public string $merchant_name;
	public string $city_name;
	public string $country_code;
}
