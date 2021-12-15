<?php

namespace Classes\Container;

use Psr\Container\ContainerInterface;
use Psr\Container\NotFoundExceptionInterface;

class Container implements ContainerInterface
{
    protected array $config = [
        'SHS' => \Services\ShsService\ShsService::class,
    ];
    protected array $instances = [];

    public function get(string $id)
    {
        if (!$this->has($id)) {
            $this->set($id);
        }
        return $this->instances[$id];
    }

    public function has(string $id): bool
    {
        return isset($this->instances[$id]);
    }

    /**
     * @throws NotFoundExceptionInterface
     */
    public function set(string $id)
    {
        if (isset($this->config[$id])) {
            $this->instances[$id] = new $this->config[$id];
        } else {
            throw new NotFoundException;
        }
    }
}
