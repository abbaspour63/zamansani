<?php

namespace ZamanSani\Admission\Core\Providers;

use ZamanSani\Admission\Core\Container\Container;

defined('ABSPATH') || exit;

interface ServiceProvider
{
    public function register(Container $container): void;

    public function boot(Container $container): void;
}
