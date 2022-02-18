<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class ItemDetails extends DataTransferObject
{
    public ?string $id = null;
    public ?int $price = null;
    public ?int $quantity = null;
    public ?string $name = null;
    public ?string $brand = null;
    public ?string $category = null;
    public ?string $merchant_name = null;
}
