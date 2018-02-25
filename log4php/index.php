<?php

require_once '/dev/lib/log4php/Logger.php';
Logger::configure('log4php.xml');
$logger = Logger::getRootLogger();

$logger->info("Hello, World");


