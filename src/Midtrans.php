<?php

namespace Sawirricardo\Midtrans;

class Midtrans
{
    private bool $isProduction;
    private string $serverKey;
    private string $clientKey;
    private bool $isSanitized;
    private bool $is3ds;

    public const SANDBOX_BASE_URL = 'https://api.sandbox.midtrans.com';
    public const PRODUCTION_BASE_URL = 'https://api.midtrans.com';
    public const SNAP_JS_SANDBOX_URL = 'https://app.sandbox.midtrans.com/snap/snap.js';
    public const SNAP_JS_PRODUCTION_URL = 'https://app.midtrans.com/snap/snap.js';
    public const SNAP_SANDBOX_BASE_URL = 'https://app.sandbox.midtrans.com/snap/v1';
    public const SNAP_PRODUCTION_BASE_URL = 'https://app.midtrans.com/snap/v1';

    public function __construct(
        $serverKey,
        $clientKey,
        $isProduction = false,
        $is3ds = true,
        $isSanitized = true,
    ) {
        $this->serverKey = $serverKey;
        $this->clientKey = $clientKey;
        $this->isProduction = $isProduction;
        $this->is3ds = $is3ds;
        $this->isSanitized = $isSanitized;
    }

    public static function make($serverKey, $clientKey, $isProduction = false, $is3ds = true, $isSanitized = true)
    {
        return new static($serverKey, $clientKey, $isProduction, $is3ds, $isSanitized);
    }

    public function snap()
    {
        return new Snap(
            $this->getAuthString(),
            $this->isProduction ? self::SNAP_PRODUCTION_BASE_URL : self::SNAP_SANDBOX_BASE_URL,
            $this->is3ds,
            $this->isSanitized
        );
    }

    public function transactionStatus($version = 2)
    {
        return new Payment(
            $this->isProduction ? self::PRODUCTION_BASE_URL : self::SANDBOX_BASE_URL . "/v$version",
            $this->is3ds,
            $this->isSanitized,
        );
    }

    protected function getAuthString()
    {
        return base64_encode($this->serverKey . ':');
    }
}
