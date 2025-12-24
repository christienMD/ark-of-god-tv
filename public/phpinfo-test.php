<?php

echo "PHP Version: " . phpversion() . "\n\n";

echo "Extensions:\n";
echo "fileinfo: " . (extension_loaded('fileinfo') ? 'ENABLED' : 'DISABLED') . "\n";
echo "curl: " . (extension_loaded('curl') ? 'ENABLED' : 'DISABLED') . "\n\n";

echo "Helper Functions:\n";
require __DIR__ . '/../vendor/autoload.php';
echo "content(): " . (function_exists('content') ? 'AVAILABLE' : 'NOT FOUND') . "\n";
echo "content_image(): " . (function_exists('content_image') ? 'AVAILABLE' : 'NOT FOUND') . "\n\n";

echo "php.ini location: " . php_ini_loaded_file() . "\n\n";

phpinfo();
