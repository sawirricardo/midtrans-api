<?php

namespace Sawirricardo\Midtrans\Request;

use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;
use Sawirricardo\Midtrans\Connector\SnapConnector;
use Sawirricardo\Midtrans\Dto\SnapTokenDto;

class CreateSnapTokenRequest extends SaloonRequest
{
    use HasJsonBody;
    use CastsToDto;

    protected ?string $method = Saloon::POST;
    protected ?string $connector = SnapConnector::class;

    public function defineEndpoint(): string
    {
        return '/transactions';
    }

    public function defaultData(): array
    {
        return [
            'credit_card' => [
                "secure" => true,
            ],
        ];
    }

    protected function castToDto(SaloonResponse $response): object
    {
        return new SnapTokenDto($response->json());
    }
}
