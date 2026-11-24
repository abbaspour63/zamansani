<?php
namespace ZamanSani\Admission\Core\Logging;
defined('ABSPATH') || exit;

final class Logger
{
    public function info(string $message): void
    {
        error_log('[ZamanSani Admission] INFO: ' . $message);
    }

    public function error(string $message): void
    {
        error_log('[ZamanSani Admission] ERROR: ' . $message);
    }


    public function warning(string $message): void
    {
        error_log('[ZamanSani Admission] WARNING: ' . $message);
    }
}

