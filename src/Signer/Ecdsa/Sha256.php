<?php
declare(strict_types=1);

namespace Claus\JWT\Signer\Ecdsa;

use Claus\JWT\Signer\Ecdsa;

use const OPENSSL_ALGO_SHA256;

final class Sha256 extends Ecdsa
{
    public function getAlgorithmId(): string
    {
        return 'ES256';
    }

    public function getAlgorithm(): int
    {
        return OPENSSL_ALGO_SHA256;
    }

    public function getKeyLength(): int
    {
        return 64;
    }
}
