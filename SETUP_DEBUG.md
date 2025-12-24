# Setup Debugging Guide

If you're experiencing errors after pulling the code, follow these steps **exactly in order**:

## Step 1: Verify PHP Configuration

```bash
# Check PHP version (should be 8.2+)
php -v

# Check which php.ini is being used
php --ini

# Check if fileinfo is enabled
php -m | grep fileinfo
```

**Expected output for fileinfo:** You should see `fileinfo` listed. If not, continue to Step 2.

## Step 2: Enable fileinfo Extension

### Find the correct php.ini:
```bash
php --ini
```

Look for the line: **Loaded Configuration File:** and note the path.

### Windows:
1. Open the php.ini file from the path above (e.g., `C:\xampp\php\php.ini`)
2. Press `Ctrl+F` and search for `fileinfo`
3. Find the line: `;extension=fileinfo`
4. Remove the semicolon: `extension=fileinfo`
5. Save the file
6. **Restart Apache completely** (stop and start, not just restart)
7. Verify: `php -m | grep fileinfo`

### If fileinfo still doesn't show:
```bash
# Windows - Check if extension file exists
dir C:\xampp\php\ext\php_fileinfo.dll

# If file doesn't exist, your PHP installation is incomplete
# Download fileinfo extension or reinstall PHP
```

## Step 3: Verify Project Files

```bash
# Navigate to project directory
cd ark-of-god-tv

# Check if helper file exists
ls -la app/Helpers/ContentHelper.php
# Windows: dir app\Helpers\ContentHelper.php

# Check composer.json has the files array
grep -A3 "\"files\"" composer.json
# Windows: findstr /C:"files" composer.json
```

**Expected output:** You should see `app/Helpers/ContentHelper.php` listed.

## Step 4: Clean Install Dependencies

```bash
# Remove vendor directory and autoload files
rm -rf vendor/
rm composer.lock

# Windows:
# rmdir /s /q vendor
# del composer.lock

# Fresh install
composer install --no-cache

# Force regenerate autoloader
composer dump-autoload -o
```

## Step 5: Clear All Laravel Caches

```bash
php artisan cache:clear
php artisan config:clear
php artisan route:clear
php artisan view:clear
php artisan clear-compiled

# Regenerate config cache
php artisan config:cache
```

## Step 6: Verify Database Setup

```bash
# Check database connection
php artisan tinker

# In tinker, run:
DB::connection()->getPdo();
exit

# If connection successful, seed the database
php artisan migrate:fresh --seed
```

## Step 7: Test Helper Functions

```bash
php artisan tinker

# In tinker, test the helpers:
content('home', 'hero', 'title', 'default');
content_image('home', 'hero', 'background_image');
exit
```

If you see **"Call to undefined function"** at this step, the autoloader is not loading the helper file.

## Step 8: Manual Helper Verification

Create a test file: `test-helper.php` in the project root:

```php
<?php

require __DIR__ . '/vendor/autoload.php';

if (function_exists('content')) {
    echo "✅ content() function is loaded\n";
} else {
    echo "❌ content() function NOT loaded\n";
}

if (function_exists('content_image')) {
    echo "✅ content_image() function is loaded\n";
} else {
    echo "❌ content_image() function NOT loaded\n";
}

if (class_exists('finfo')) {
    echo "✅ finfo class is available\n";
} else {
    echo "❌ finfo class NOT available\n";
}
```

Run it:
```bash
php test-helper.php
```

## Step 9: Check File Permissions (Linux/Mac)

```bash
# Give proper permissions
chmod -R 755 app/
chmod -R 755 bootstrap/cache
chmod -R 755 storage/

chown -R $USER:$USER app/
chown -R $USER:$USER storage/
chown -R $USER:$USER bootstrap/cache
```

## Step 10: Start Fresh Server

```bash
# Kill any running Laravel servers
# Windows: Check Task Manager and kill any php.exe processes

# Linux/Mac:
killall php

# Start server on a different port
php artisan serve --port=8001
```

Visit: `http://127.0.0.1:8001`

---

## If STILL Not Working:

### Check for Multiple PHP Versions:

```bash
# Check which PHP is being used
which php
php -v

# Check for other PHP versions
# Windows (in Command Prompt):
where php

# Mac/Linux:
which -a php
```

You might be editing the wrong `php.ini` if multiple PHP versions exist.

### Web Server vs CLI PHP:

The web server (Apache/Nginx) might use a **different PHP** than the command line!

```bash
# Create a file: public/info.php
<?php phpinfo(); ?>
```

Visit: `http://127.0.0.1:8000/info.php`

Look for:
1. **Configuration File (php.ini) Path** - Is it the same as `php --ini`?
2. **fileinfo** section - Is it present?

### Nuclear Option - Complete Reset:

```bash
# Backup .env file
cp .env .env.backup

# Delete everything except .git and code files
rm -rf vendor/ node_modules/ bootstrap/cache/* storage/logs/*
rm composer.lock package-lock.json

# Fresh install
composer install
composer dump-autoload -o
npm install

# Restore .env
cp .env.backup .env

# Fresh database
php artisan migrate:fresh --seed

# Clear everything
php artisan optimize:clear
php artisan optimize

# Start server
php artisan serve
```

---

## Still Getting Errors?

**Send me:**
1. Output of `php -v`
2. Output of `php --ini`
3. Output of `php -m | grep fileinfo`
4. Output of `composer dump-autoload -vvv` (very verbose)
5. Screenshot of the exact error
6. Operating System details

