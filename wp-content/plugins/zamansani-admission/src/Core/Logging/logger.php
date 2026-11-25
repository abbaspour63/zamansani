<?php

namespace ZamanSani\Admission\Core\Logging;
defined('ABSPATH') || exit;

final class Logger
{
    private string $logFile;
    
    public function __construct()
    {
        $this->logFile = ZS_ADMISSION_PATH . 'logs/admission.log';
    }

    public function info(string $message): void
    {
        $this->write('INFO', $message);
    }

    public function warning(string $message): void
    {
        $this->write('WARNING', $message);
    }

    public function error(string $message): void
    {
        $this->write('ERROR', $message);   
    }

    private function write(string $level, string $message): void
      
    {
        $directory = dirname($this->logFile);

        if (!is_dir($directory)) {
            if (!wp_mkdir_p($directory)) {
                error_log('[ZamanSani Admission] Cannot create log directory.');
                return;
            }
        }

        $timestamp = current_time('mysql');

        $line = sprintf(
            "[%s] %s: %s%s",
            $timestamp,
            $level,
            $message,
            PHP_EOL
        );

        error_log($line, 3, $this->logFile);
    }
}
