<?php
declare(strict_types=1);

namespace Claus\JWT\Signer;

use const OPENSSL_KEYTYPE_RSA;

abstract class Rsa extends OpenSSL
{
    final public function sign(string $payload, Key $key): string
    {
        return $this->createSignature($key->getContent(), $key->getPassphrase(), $payload);
    }

    final public function verify(string $expected, string $payload, Key $key): bool
    {
        return $this->verifySignature($expected, $payload, $key->getContent());
    }

    final public function getKeyType(): int
    {
        return OPENSSL_KEYTYPE_RSA;
    }
}
