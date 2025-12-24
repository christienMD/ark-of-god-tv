<?php
/**
 * Setup Verification Script
 * Run: php test-setup.php
 */

echo "\n========================================\n";
echo "  ARK OF GOD TV - Setup Verification\n";
echo "========================================\n\n";

// Test 1: PHP Version
echo "1. Checking PHP Version...\n";
$phpVersion = phpversion();
echo "   PHP Version: {$phpVersion}\n";
if (version_compare($phpVersion, '8.2.0', '>=')) {
    echo "   ✅ PHP version is compatible\n\n";
} else {
    echo "   ❌ PHP version should be 8.2 or higher\n\n";
}

// Test 2: Required Extensions
echo "2. Checking Required Extensions...\n";
$required = ['fileinfo', 'pdo', 'mbstring', 'openssl', 'tokenizer', 'xml', 'curl', 'gd', 'zip'];
$missing = [];

foreach ($required as $ext) {
    if (extension_loaded($ext)) {
        echo "   ✅ {$ext}\n";
    } else {
        echo "   ❌ {$ext} (MISSING)\n";
        $missing[] = $ext;
    }
}

if (empty($missing)) {
    echo "\n   All required extensions are installed!\n\n";
} else {
    echo "\n   ⚠️  Missing extensions: " . implode(', ', $missing) . "\n\n";
}

// Test 3: Autoloader
echo "3. Checking Autoloader...\n";
if (file_exists(__DIR__ . '/vendor/autoload.php')) {
    echo "   ✅ vendor/autoload.php exists\n";
    require __DIR__ . '/vendor/autoload.php';
    echo "   ✅ Autoloader loaded successfully\n\n";
} else {
    echo "   ❌ vendor/autoload.php NOT found\n";
    echo "   Run: composer install\n\n";
    exit(1);
}

// Test 4: Helper Functions
echo "4. Checking Helper Functions...\n";
if (function_exists('content')) {
    echo "   ✅ content() function is available\n";
} else {
    echo "   ❌ content() function NOT found\n";
    echo "   Run: composer dump-autoload\n";
}

if (function_exists('content_image')) {
    echo "   ✅ content_image() function is available\n";
} else {
    echo "   ❌ content_image() function NOT found\n";
    echo "   Run: composer dump-autoload\n";
}

if (function_exists('section_active')) {
    echo "   ✅ section_active() function is available\n\n";
} else {
    echo "   ❌ section_active() function NOT found\n";
    echo "   Run: composer dump-autoload\n\n";
}

// Test 5: Helper File
echo "5. Checking Helper File...\n";
$helperPath = __DIR__ . '/app/Helpers/ContentHelper.php';
if (file_exists($helperPath)) {
    echo "   ✅ ContentHelper.php exists\n";
    echo "   Location: {$helperPath}\n\n";
} else {
    echo "   ❌ ContentHelper.php NOT found\n";
    echo "   Expected: {$helperPath}\n\n";
}

// Test 6: Environment File
echo "6. Checking Environment File...\n";
if (file_exists(__DIR__ . '/.env')) {
    echo "   ✅ .env file exists\n\n";
} else {
    echo "   ❌ .env file NOT found\n";
    echo "   Run: cp .env.example .env\n\n";
}

// Test 7: Storage Permissions (Unix-like systems)
if (PHP_OS_FAMILY !== 'Windows') {
    echo "7. Checking Storage Permissions...\n";
    $storagePath = __DIR__ . '/storage';
    if (is_writable($storagePath)) {
        echo "   ✅ storage/ is writable\n";
    } else {
        echo "   ❌ storage/ is NOT writable\n";
        echo "   Run: chmod -R 775 storage/\n";
    }
    
    $cachePath = __DIR__ . '/bootstrap/cache';
    if (is_writable($cachePath)) {
        echo "   ✅ bootstrap/cache/ is writable\n\n";
    } else {
        echo "   ❌ bootstrap/cache/ is NOT writable\n";
        echo "   Run: chmod -R 775 bootstrap/cache/\n\n";
    }
}

// Test 8: Database Connection (if Laravel is bootstrapped)
echo "8. Checking Database Connection...\n";
try {
    if (class_exists('Illuminate\Support\Facades\DB')) {
        $app = require_once __DIR__ . '/bootstrap/app.php';
        $kernel = $app->make(\Illuminate\Contracts\Console\Kernel::class);
        $kernel->bootstrap();
        
        \Illuminate\Support\Facades\DB::connection()->getPdo();
        echo "   ✅ Database connection successful\n\n";
    } else {
        echo "   ⚠️  Laravel not fully bootstrapped, skipping DB test\n\n";
    }
} catch (Exception $e) {
    echo "   ❌ Database connection failed\n";
    echo "   Error: " . $e->getMessage() . "\n\n";
}

// Test 9: finfo class
echo "9. Checking finfo Class (for file uploads)...\n";
if (class_exists('finfo')) {
    echo "   ✅ finfo class is available\n";
    $finfo = new finfo(FILEINFO_MIME_TYPE);
    echo "   ✅ finfo can be instantiated\n\n";
} else {
    echo "   ❌ finfo class NOT available\n";
    echo "   Enable fileinfo extension in php.ini\n\n";
}

// Summary
echo "========================================\n";
echo "  Setup Verification Complete!\n";
echo "========================================\n\n";

if (empty($missing) && function_exists('content') && class_exists('finfo')) {
    echo "✅ All tests passed! You're good to go!\n";
    echo "Run: php artisan serve\n\n";
} else {
    echo "⚠️  Some issues need to be fixed.\n";
    echo "See the errors above for details.\n\n";
    exit(1);
}

