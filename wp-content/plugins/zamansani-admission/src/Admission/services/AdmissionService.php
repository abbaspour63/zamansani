<?php

namespace ZamanSani\Admission\Services;

use ZamanSani\Admission\Core\Logging\Logger;

defined('ABSPATH') || exit;

final class AdmissionService
{
    private Logger $logger;

    public function __construct(Logger $logger)
    {
        $this->logger = $logger;
    }

    public function create(): void
    {
        $this->logger->info('Admission process started.');
    }
}

