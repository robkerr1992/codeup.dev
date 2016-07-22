<?php

class Log
{
    public $filename;

    public function logMessage($logLevel, $message)

    {
        date_default_timezone_set('America/Chicago');
        $date = date('Y-d-m');
        $time = date('H:i:s');
        $filename = "LOG-$date.log";
        $handle = fopen($filename, 'a');
        fwrite($handle,"$date $time [$logLevel] $message\n");
        fclose($handle);

    }

    public function logInfo($message){
        logMessage('Info', $message);
    }

    public function logError($message) {
        logMessage('Error', $message);
    }

}