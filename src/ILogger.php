<?php
namespace Rresch2004\Logger;

Interface ILogger {
    public function logEntry(string $line):void;

}