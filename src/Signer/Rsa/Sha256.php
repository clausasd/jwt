<?php
declare(strict_types=1);

namespace Claus\JWT\Signer\Rsa;

use Claus\JWT\Signer\Rsa;

use const OPENSSL_ALGO_SHA256;

final class Sha256 extends Rsa
{
    public function getAlgorithmId(): string
    {
        return 'RS256';
    }

    public function getAlgorithm(): int
    {
        return OPENSSL_ALGO_SHA256;
    }
}
