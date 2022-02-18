<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class Terms extends DataTransferObject
{
    /** @var int[] $bni */
    public ?array $bni;

    /** @var int[] $mandiri */
    public ?array $mandiri;

    /** @var int[] $cimb */
    public ?array $cimb;

    /** @var int[] $bca */
    public ?array $bca;

    /** @var int[] $offline */
    public ?array $offline;
}
