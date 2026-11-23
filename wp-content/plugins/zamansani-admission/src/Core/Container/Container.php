<?php

namespace ZamanSani\Admission\Core\Container;
defined('ABSPATH') || exit;

final class Container
{
    private array $bindings = [];

    private array $instances = [];

    public function bind(
        string $abstract,
        callable|string $concrete
    ): void {
        $this->bindings[$abstract] = $concrete;
        unset($this->instances[$abstract]);
        
    }

    public function singleton(
        string $abstract,
        callable|string $concrete
    ): void {
        $this->bindings[$abstract] = $concrete;

        unset($this->instances[$abstract]);
    }

    public function instance(
        string $abstract,
        object $instance
    ): void {
        $this->instances[$abstract] = $instance;
    }

    public function has(string $abstract): bool
    {
        return array_key_exists($abstract, $this->bindings)
            || array_key_exists($abstract, $this->instances);
    }

    public function get(string $abstract): mixed

    {
        if (array_key_exists($abstract, $this->instances)) {
            return $this->instances[$abstract];
        }

        if (!array_key_exists($abstract, $this->bindings)) {
            throw new \RuntimeException(
                "Service not found: {$abstract}"
            );
        }

        $concrete = $this->bindings[$abstract];

        $object = is_callable($concrete)
            ? $concrete($this)
            : new $concrete();

        if (is_string($this->bindings[$abstract])) {
            // Ordinary bindings are not shared.
        } else {
            $this->instances[$abstract] = $object;
        }

        return $object;
    }
}