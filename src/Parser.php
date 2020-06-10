<?php
declare(strict_types=1);

namespace Claus\JWT;

use InvalidArgumentException;

interface Parser
{
    /**
     * Parses the JWT and returns a token
     *
     * @throws InvalidArgumentException
     */
    public function parse(string $jwt): Token;
}
