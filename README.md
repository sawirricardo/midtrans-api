# Interact with Midtrans API. Included Snap and its Core API.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/midtrans-api.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/midtrans-api)
[![Tests](https://github.com/sawirricardo/midtrans-api/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/sawirricardo/midtrans-api/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/midtrans-api.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/midtrans-api)

Interact with Midtrans API. Included Snap and its Core API.
If you use Laravel, you can use [`sawirricardo/laravel-midtrans`](https://github.com/sawirricardo/laravel-midtrans) package, which has more exciting features by default

## Support us

Investing on this package is defintely a good move from you. You can support by donating to my wallet

-   Wallet 0x3F20d326E5DA8ab6D27d9b2DdD350baB1e589d87
-   PayPal https://www.paypal.com/paypalme/sawirricardo.
-   BCA 8330123584

## Installation

You can install the package via composer:

```bash
composer require sawirricardo/midtrans-api
```

## Usage

```php
$midtransClient = \Sawirricardo\Midtrans\Midtrans::make(
    $serverKey,
    $clientKey,
    $isProduction,
    $is3ds,
    $isSanitized
);
$snapToken = $midtransClient->snap()->create(new \Sawirricardo\Midtrans\Dto\TransactionDto([
        'transaction_details' => [
            'order_id' => 'your-order-id',
            'gross_amount' => 10000,
        ]
    ]));

echo $snapToken->token;
echo $snapToken->redirect_url;

$transactionStatus = $midtransClient->payment()->getStatus('your-order-id-or-transaction-id');
```

## Testing

```bash
composer test
```

## Changelog

Please see [CHANGELOG](CHANGELOG.md) for more information on what has changed recently.

## Contributing

Please see [CONTRIBUTING](.github/CONTRIBUTING.md) for details.

## Security Vulnerabilities

Please review [our security policy](../../security/policy) on how to report security vulnerabilities.

## Credits

-   [sawirricardo](https://github.com/sawirricardo)
-   [All Contributors](../../contributors)

## License

The MIT License (MIT). Please see [License File](LICENSE.md) for more information.
