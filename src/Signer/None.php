<?php
declare(strict_types=1);

namespace Claus\JWT\Signer;

use Claus\JWT\Signer;

final class None implements Signer
{
    public function getAlgorithmId(): string
    {
        return 'none';
    }

    public function sign(string $payload, Key $key): string
    {
        return '';
    }

    public function verify(string $expected, string $payload, Key $key): bool
    {
        return $expected === '';
    }
}
