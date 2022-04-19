<?php

namespace Sawirricardo\Midtrans;

class Midtrans
{
    public const SNAP_JS_SANDBOX_URL = 'https://app.sandbox.midtrans.com/snap/snap.js';
    public const SNAP_JS_PRODUCTION_URL = 'https://app.midtrans.com/snap/snap.js';

    public function __construct(
        private string $serverKey,
        private string $clientKey,
        private bool $isProduction = false,
        private bool $is3ds = true,
        private bool $isSanitized = true,
    ) {
    }

    public static function make($serverKey, $clientKey, $isProduction = false, $is3ds = true, $isSanitized = true)
    {
        return new static($serverKey, $clientKey, $isProduction, $is3ds, $isSanitized);
    }

    public function snap()
    {
        return new Snap(serverKey: $this->serverKey, isProduction: $this->isProduction);
    }

    public function payment()
    {
        return new Payment(serverKey: $this->serverKey, isProduction: $this->isProduction);
    }
}
