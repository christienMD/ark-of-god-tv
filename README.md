# Ark of God TV - AGCOM Ministry Website

A Laravel-based website for Ark of God Covenant Ministry (AGCOM) featuring dynamic content management through Filament admin panel.

## Tech Stack

- **Framework:** Laravel 11
- **Admin Panel:** Filament 4
- **Database:** MySQL
- **Frontend:** Blade Templates with Bootstrap

## Installation

```bash
# Clone the repository
git clone <repository-url>
cd ark-of-god-tv

# Install dependencies
composer install
npm install

# Regenerate autoloader (important for helper functions)
composer dump-autoload

# Copy environment file
cp .env.example .env

# Configure your database in .env file
# DB_CONNECTION=mysql
# DB_HOST=127.0.0.1
# DB_PORT=3306
# DB_DATABASE=your_database_name
# DB_USERNAME=your_username
# DB_PASSWORD=your_password

# Generate application key
php artisan key:generate

# Run migrations
php artisan migrate

# Seed the database with page content
php artisan db:seed --class=PageContentSeeder

# Build assets
npm run build

# Start the server
php artisan serve
```

## Troubleshooting

### Error: "Call to undefined function content_image()"

**Solution:** Run the autoloader regeneration:
```bash
composer dump-autoload
```

### Error: "Class 'finfo' not found"

**Cause:** PHP `fileinfo` extension is not enabled (required for file uploads).

**Solution:**

**Windows (XAMPP/WAMP):**
1. Open `php.ini` (usually `C:\xampp\php\php.ini`)
2. Find `;extension=fileinfo`
3. Remove the semicolon: `extension=fileinfo`
4. Restart Apache

**Mac (Homebrew):**
```bash
# Edit php.ini
nano /opt/homebrew/etc/php/8.4/php.ini
# Uncomment: extension=fileinfo
```

**Linux:**
```bash
sudo apt-get install php8.4-fileinfo
sudo systemctl restart apache2
```

**Verify installation:**
```bash
php -m | grep fileinfo
```

### Error: Database connection issues

Make sure you've:
1. Created the MySQL database
2. Updated `.env` with correct credentials
3. Run `php artisan migrate`
4. Run `php artisan db:seed --class=PageContentSeeder`

## Admin Panel

Access the admin panel at `/admin` to manage:
- **Page Contents** - Edit text, images, and videos for all website sections
- **Blogs** - Manage blog posts
- **Branches** - Manage ministry branches
- **Lives** - Manage live stream content
- **Events** - Manage ministry events

## Custom Artisan Commands

### Export Page Content to Seeder

After making changes to page content in the admin panel, you can export the current database state to the seeder file for version control:

```bash
php artisan page-content:export-seeder
```

This command:
- Reads all `PageContent` records from the database
- Generates a new `PageContentSeeder.php` file
- Preserves all your admin panel changes in code
- Allows you to commit content changes to version control

**Use case:** When you or a client updates content via the admin panel and you want to sync those changes to your codebase for deployment to other environments.

## Pages with Dynamic Content

The following pages are connected to the admin panel:

| Page | Sections |
|------|----------|
| **Home** | Hero, Scrolling Ticker, About, Join Worship, Our Counter, Our Mission, Our Services, Service Ticker, Our Ministries, Our Sermons, Verse Church, CTA Box, Our Event, Donate Now, Our Blog, Subscribe Newsletter |
| **Live** | Hero (with video controls) |
| **About** | About Us, Vision Mission, Counter, What We Do, Our Team, Pastor's Message, Core Values |
| **Events** | Page Header, Featured Event, FAQs, Sidebar |
| **Branches** | Page Header |
| **Partnership** | Page Header, Why Partner, Impact Areas, Seed in Action, Giving Channels, Bank Transfers, Mobile Money, FAQs |

## Content Helper Functions

Use these helper functions in Blade templates to retrieve dynamic content:

```php
// Get a text field
content('page_slug', 'section_slug', 'field_name', 'default value')

// Get an image URL
content_image('page_slug', 'section_slug', 'field_name', 'default.jpg')

// Check if a section is active
section_active('page_slug', 'section_slug')
```

## License

This project is proprietary software for Ark of God Covenant Ministry.
