<?php

use Sammyjo20\Saloon\Constants\Saloon;
use Sammyjo20\Saloon\Http\SaloonRequest;
use Sammyjo20\Saloon\Http\SaloonResponse;
use Sammyjo20\Saloon\Traits\Plugins\CastsToDto;
use Sammyjo20\Saloon\Traits\Plugins\HasJsonBody;
use Sawirricardo\Midtrans\Dto\TransactionStatus;

class GetPaymentStatusRequest extends SaloonRequest
{
    use HasJsonBody;
    use CastsToDto;

    protected ?string $method = Saloon::GET;
    protected ?string $connector = PaymentConnector::class;

    public function defineEndpoint(): string
    {
        return "/transactions/{$this->orderIdOrTransactionId}/status" ;
    }

    protected function castToDto(SaloonResponse $response): object
    {
        return new TransactionStatus($response->json());
    }
}
