# Interact with Midtrans API. Included Snap and its Core API.

[![Latest Version on Packagist](https://img.shields.io/packagist/v/sawirricardo/midtrans-api.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/midtrans-api)
[![Tests](https://github.com/sawirricardo/midtrans-api/actions/workflows/run-tests.yml/badge.svg?branch=main)](https://github.com/sawirricardo/midtrans-api/actions/workflows/run-tests.yml)
[![Total Downloads](https://img.shields.io/packagist/dt/sawirricardo/midtrans-api.svg?style=flat-square)](https://packagist.org/packages/sawirricardo/midtrans-api)

Interact with Midtrans API. Included Snap and its Core API.

## Support us

[<img src="https://github-ads.s3.eu-central-1.amazonaws.com/midtrans-api.jpg?t=1" width="419px" />](https://spatie.be/github-ad-click/midtrans-api)

We invest a lot of resources into creating [best in class open source packages](https://spatie.be/open-source). You can support us by [buying one of our paid products](https://spatie.be/open-source/support-us).

We highly appreciate you sending us a postcard from your hometown, mentioning which of our package(s) you are using. You'll find our address on [our contact page](https://spatie.be/about-us). We publish all received postcards on [our virtual postcard wall](https://spatie.be/open-source/postcards).

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

$transactionStatus = n
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
