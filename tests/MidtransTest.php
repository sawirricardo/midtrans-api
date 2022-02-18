<?php

use Sawirricardo\Midtrans\Midtrans;

it('can create a snap transaction', function () {
    $snapToken = Midtrans::make($_ENV['MIDTRANS_SB_SERVER_KEY'], $_ENV['MIDTRANS_SB_CLIENT_KEY'])
        ->snap()->create(new \Sawirricardo\Midtrans\Dto\TransactionDto([
            'transaction_details' => [
                'order_id' => 'test123',
                'gross_amount' => 10000,
            ],
        ]));
    expect($snapToken->redirect_url)->not->toBeNull();
    expect($snapToken->token)->not->toBeNull();
});
