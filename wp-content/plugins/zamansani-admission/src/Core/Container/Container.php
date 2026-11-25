<?php
namespace ZamanSani\Admission\Core\Container;

defined('ABSPATH') || exit;

final class Container
{
    private array $bindings = [];
    
    private array $instances = [];
    
    /**
     * Register a transient binding.
     */
    public function bind(
        string $abstract,
        callable|string $concrete
    ): void {
        $this->bindings[$abstract] = [
            'concrete' => $concrete,
            'shared'  => false,
        ];

        unset($this->instances[$abstract]);
    }
    
    /**
     * Register a singleton binding.
     */
    public function singleton(
        string $abstract,
        callable|string $concrete
    ): void {
        $this->bindings[$abstract] = [
            'concrete' => $concrete,
            'shared'  => true,
        ];

        unset($this->instances[$abstract]);
    }

    /**
     * Register an existing object.
     */
    public function instance(
        string $abstract,
        object $instance
    ): void {
        $this->instances[$abstract] = $instance;
    }

    /**
     * Check whether a service exists.
     */
    public function has(string $abstract): bool
    {
        return array_key_exists($abstract, $this->bindings)
            || array_key_exists($abstract, $this->instances);
    }

    /**
     * Resolve a service.
     */
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

        $binding = $this->bindings[$abstract];
        $concrete = $binding['concrete'];

        $object = is_callable($concrete)
            ? $concrete($this)
            : new $concrete();

        if ($binding['shared']) {
            $this->instances[$abstract] = $object;
        }

        return $object;
    }
}

