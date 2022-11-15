<?php
//Define custome constants to use with the project
define('DATA_PATH', dirname(__FILE__) . '/data/');

//Custom error handler, so every error will throw a custom ErrorException
set_error_handler(function ($severity, $message, $file, $line) {
    throw new ErrorException($message, $severity, $severity, $file, $line);
});