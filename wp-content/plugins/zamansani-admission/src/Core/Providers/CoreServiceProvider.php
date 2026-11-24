<?php

namespace ZamanSani\Admission\Core\Providers;

use ZamanSani\Admission\Core\Container\Container;

defined('ABSPATH') || exit;

final class CoreServiceProvider implements ServiceProvider
{
    public function register(Container $container): void
    {
        $container->singleton(
            \ZamanSani\Admission\Core\Logging\Logger::class,
            \ZamanSani\Admission\Core\Logging\Logger::class
        );
    }

    public function boot(Container $container): void
    {
        // Initialize core services here.
    }
    
}