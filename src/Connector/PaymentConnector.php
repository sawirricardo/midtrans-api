<?php

namespace Sawirricardo\Midtrans\Connector;

use Sammyjo20\Saloon\Http\Auth\TokenAuthenticator;
use Sammyjo20\Saloon\Http\SaloonConnector;
use Sammyjo20\Saloon\Interfaces\AuthenticatorInterface;
use Sammyjo20\Saloon\Traits\Auth\RequiresTokenAuth;
use Sammyjo20\Saloon\Traits\Plugins\AcceptsJson;
use Sammyjo20\Saloon\Traits\Plugins\AlwaysThrowsOnErrors;
use Sammyjo20\Saloon\Traits\Plugins\HasTimeout;

class PaymentConnector extends SaloonConnector
{
    use AcceptsJson;
    use AlwaysThrowsOnErrors;
    use HasTimeout;
    use RequiresTokenAuth;

    public function __construct(private string $serverKey, private bool $isProduction = false)
    {
    }

    public function defineBaseUrl(): string
    {
        if ($this->isProduction) {
            return 'https://api.midtrans.com/v2';
        }

        return 'https://api.sandbox.midtrans.com/v2';
    }

    public function defaultAuth(): ?AuthenticatorInterface
    {
        return new TokenAuthenticator(base64_encode($this->serverKey . ':'), 'Basic');
    }
}
