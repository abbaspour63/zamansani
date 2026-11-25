<?php
namespace ZamanSani\Admission\Core\Providers;
use ZamanSani\Admission\Core\Container\Container;
use ZamanSani\Admission\Core\Logging\Logger;

defined('ABSPATH') || exit;

final class CoreServiceProvider implements ServiceProvider
{
    public function register(Container $container): void
    {
        $container->singleton(
            Logger::class,
            Logger::class
        );
    }

    public function boot(Container $container): void
    {
        $logger1 = $container->get(Logger::class);
        $logger2 = $container->get(Logger::class);

        if ($logger1 === $logger2) {
            $logger1->info('Singleton test passed.');
        }

        $logger1->warning('Logger warning test.');
        $logger1->error('Logger error test.');
    }
}
