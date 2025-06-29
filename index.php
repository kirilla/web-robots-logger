<?php
http_response_code(404);

// Define log directory
$logDir = __DIR__ . '/logs';

// Ensure log directory exists
if (!is_dir($logDir)) {
    mkdir($logDir, 0750, true);
}

// Get values
$uri       = $_SERVER['REQUEST_URI']     ?? '[unknown URI]';
$ip        = $_SERVER['REMOTE_ADDR']     ?? '[unknown IP]';
$userAgent = $_SERVER['HTTP_USER_AGENT'] ?? '[unknown UA]';

// Write to separate files
file_put_contents($logDir . '/uri.txt',        $uri . "\n",        FILE_APPEND | LOCK_EX);
file_put_contents($logDir . '/ip.txt',         $ip . "\n",         FILE_APPEND | LOCK_EX);
file_put_contents($logDir . '/useragent.txt',  $userAgent . "\n",  FILE_APPEND | LOCK_EX);

exit;
