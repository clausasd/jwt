<?php
declare(strict_types=1);

namespace Claus\JWT\Validation;

use Claus\JWT\Token;

interface Constraint
{
    /**
     * @throws ConstraintViolation
     */
    public function assert(Token $token): void;
}
