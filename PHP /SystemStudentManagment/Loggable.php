<?php

namespace Traits;

trait Loggable
{
    private $logFile = '../logs/log.txt';

    private function log($message)
    {
        $timestamp = date('Y-m-d H:i:s');
        $logMessage = "[$timestamp] $message\n";
        file_put_contents($this->logFile, $logMessage, FILE_APPEND);
    }
}
