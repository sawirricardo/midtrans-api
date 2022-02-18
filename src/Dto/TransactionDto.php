<?php

namespace Sawirricardo\Midtrans\Dto;

use Spatie\DataTransferObject\DataTransferObject;

class TransactionDto extends DataTransferObject
{
    public TransactionDetails $transaction_details;

    /** @var \Sawirricardo\Midtrans\Dto\ItemDetails[] */
    public ?array $item_details = null;
    public ?CustomerDetails $customer_details = null;

    /** @var string[] */
    public ?array $enabled_payments = null;
    public ?CreditCard $credit_card = null;
    public ?BcaVa $bca_va = null;
    public ?BniVa $bni_va = null;
    public ?BriVa $bri_va = null;
    public ?PermataVa $permata_va = null;
    public ?Shopeepay $shopeepay = null;
    public ?Gopay $gopay = null;
    public ?Callbacks $callbacks = null;
    public ?Expiry $expiry = null;
    public ?string $custom_field1 = null;
    public ?string $custom_field2 = null;
    public ?string $custom_field3 = null;
}
