<?php
declare(strict_types=1);

namespace Claus\JWT;

use Claus\JWT\Validation\Constraint;
use Claus\JWT\Validation\InvalidToken;
use Claus\JWT\Validation\NoConstraintsGiven;

interface Validator
{
    /**
     * @throws InvalidToken
     * @throws NoConstraintsGiven
     */
    public function assert(Token $token, Constraint ...$constraints): void;

    /**
     * @throws NoConstraintsGiven
     */
    public function validate(Token $token, Constraint ...$constraints): bool;
}
