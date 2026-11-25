<?php
namespace ZamanSani\Admission\Core\Bootstrap;

use ZamanSani\Admission\Core\Container\Container;
use ZamanSani\Admission\Core\Providers\ServiceProvider;

defined('ABSPATH') || exit;

final class Plugin
{
    private Container $container;

    private array $providers = [];

    public function __construct(Container $container)
    {
        $this->container = $container;
    }

    public function addProvider(ServiceProvider $provider): void
    {
        $this->providers[] = $provider;
    }
    

    public function run(): void
    {
        // First: Register all services.
        foreach ($this->providers as $provider) {
            $provider->register($this->container);
        }

        // Second: Boot all providers.
        foreach ($this->providers as $provider) {
            $provider->boot($this->container);
        }
    }
}
