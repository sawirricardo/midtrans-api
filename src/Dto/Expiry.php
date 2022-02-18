<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Expiry extends DataTransferObject
{
    public string $start_time;
    /** minute | day | hour */
    public string $unit;
    public int $duration;
}
