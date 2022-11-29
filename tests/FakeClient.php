<?php

namespace Cedula\Validator\Tests;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;

class FakeClient extends Client
{
    public const VALID_ID         = '40221232423';
    public const VALID_RESPONSE   = '{ "valid": true }';
    public const INVALID_RESPONSE = '{ "valid": false }';

    public function get($uri, array $options = []): ResponseInterface
    {
        if (str_contains($uri, self::VALID_ID)) {
            return new Response(200, [],self::VALID_RESPONSE);
        }

        return new Response(400, [], self::INVALID_RESPONSE);
    }
}
