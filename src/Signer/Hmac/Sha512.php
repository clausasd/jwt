<?php
declare(strict_types=1);

namespace Claus\JWT\Signer\Hmac;

use Claus\JWT\Signer\Hmac;

final class Sha512 extends Hmac
{
    public function getAlgorithmId(): string
    {
        return 'HS512';
    }

    public function getAlgorithm(): string
    {
        return 'sha512';
    }
}
