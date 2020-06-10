<?php
declare(strict_types=1);

namespace Claus\JWT\Signer\Hmac;

use Claus\JWT\Signer\Hmac;

final class Sha384 extends Hmac
{
    public function getAlgorithmId(): string
    {
        return 'HS384';
    }

    public function getAlgorithm(): string
    {
        return 'sha384';
    }
}
