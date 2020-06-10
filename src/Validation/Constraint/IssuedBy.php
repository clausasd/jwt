<?php
declare(strict_types=1);

namespace Claus\JWT\Validation\Constraint;

use Claus\JWT\Token;
use Claus\JWT\Validation\Constraint;
use Claus\JWT\Validation\ConstraintViolation;

final class IssuedBy implements Constraint
{
    /** @var string[] */
    private array $issuers;

    public function __construct(string ...$issuers)
    {
        $this->issuers = $issuers;
    }

    public function assert(Token $token): void
    {
        if (! $token->hasBeenIssuedBy(...$this->issuers)) {
            throw new ConstraintViolation(
                'The token was not issued by the given issuers'
            );
        }
    }
}
