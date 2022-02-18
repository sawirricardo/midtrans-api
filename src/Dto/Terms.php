<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Terms extends DataTransferObject
{
    /** @var int[] */
    public ?array $bni;

    /** @var int[] */
    public ?array $mandiri;

    /** @var int[] */
    public ?array $cimb;

    /** @var int[] */
    public ?array $bca;

    /** @var int[] */
    public ?array $offline;
}
