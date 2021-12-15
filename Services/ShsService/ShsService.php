<?php

namespace Services\ShsService;

use GuzzleHttp\Client;
use Psr\Http\Message\ResponseInterface;

class ShsService implements IShsService
{
    protected Client $client;
    protected string $url;
    protected array $headers = [];

    public function __construct()
    {
        $this->client = new Client();
    }

    public function setUrl(string $url): void
    {
        $this->url = $url;
    }

    public function setHeaders(array $headers): void
    {
        $this->headers = $headers;
    }

    public function get(): ResponseInterface
    {
        return $this->client->request('GET', $this->url, [
            'headers' => $this->headers,
        ]);
    }

    public function post(): ResponseInterface
    {
        return $this->client->request('POST', $this->url, [
            'headers' => $this->headers,
        ]);
    }
}