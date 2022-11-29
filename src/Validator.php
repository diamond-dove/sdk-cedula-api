<?php

namespace cedula\Validator;

use GuzzleHttp\Client;
use GrahamCampbell\GuzzleFactory\GuzzleFactory;
use GuzzleHttp\Exception\BadResponseException;
use GuzzleHttp\Exception\GuzzleException;

class Validator
{
    protected CONST API_URL = 'https://api.digital.gob.do/v3/cedulas/';

    public function __construct(
        public readonly string $url,
        public readonly Client $client,
    ) {}

    public static function make(?Client $client = null): self
    {
        return new static(self::API_URL, $client ?? new Client(['handler' => GuzzleFactory::handler()]));
    }

    /**
     * @param string $id
     *
     * @return bool
     * @throws GuzzleException
     */
    public function isValid(string $id): bool
    {
        try {
            $response = $this->client->get($this->url .  preg_replace('/[^0-9]/', '', $id) . '/validate');
        } catch (BadResponseException $exception) {
            $response = $exception->getResponse();
        }

        $result = json_decode($response->getBody());

        return $result?->valid ?? false;
    }
}
