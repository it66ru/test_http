<?php

namespace Services\ShsService;

use Psr\Http\Message\ResponseInterface;

interface IShsService
{

    public function setUrl(string $url): void;

    public function setHeaders(array $headers): void;

    public function get(): ResponseInterface;

    public function post(): ResponseInterface;

}