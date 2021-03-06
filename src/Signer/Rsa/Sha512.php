<?php
declare(strict_types=1);

namespace Claus\JWT\Signer\Rsa;

use Claus\JWT\Signer\Rsa;

use const OPENSSL_ALGO_SHA512;

final class Sha512 extends Rsa
{
    public function getAlgorithmId(): string
    {
        return 'RS512';
    }

    public function getAlgorithm(): int
    {
        return OPENSSL_ALGO_SHA512;
    }
}
