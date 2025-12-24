<?php

namespace App\Console\Commands;

use App\Models\PageContent;
use Illuminate\Console\Command;
use Illuminate\Support\Facades\File;

class ExportPageContentSeeder extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'page-content:export-seeder';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Export current PageContent database records to the seeder file';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $contents = PageContent::orderBy('page_slug')->orderBy('order')->get();

        if ($contents->isEmpty()) {
            $this->error('No PageContent records found in the database.');
            return 1;
        }

        $seederContent = $this->generateSeederContent($contents);

        $seederPath = database_path('seeders/PageContentSeeder.php');
        File::put($seederPath, $seederContent);

        $this->info("✅ PageContentSeeder.php has been updated with {$contents->count()} records!");
        $this->info("📁 File location: {$seederPath}");

        return 0;
    }

    /**
     * Generate the seeder file content.
     */
    private function generateSeederContent($contents): string
    {
        $php = "<?php\n\n";
        $php .= "namespace Database\\Seeders;\n\n";
        $php .= "use App\\Models\\PageContent;\n";
        $php .= "use Illuminate\\Database\\Seeder;\n\n";
        $php .= "class PageContentSeeder extends Seeder\n";
        $php .= "{\n";
        $php .= "    /**\n";
        $php .= "     * Run the database seeds.\n";
        $php .= "     * \n";
        $php .= "     * Auto-generated from database on " . now()->format('Y-m-d H:i:s') . "\n";
        $php .= "     * Command: php artisan page-content:export-seeder\n";
        $php .= "     */\n";
        $php .= "    public function run(): void\n";
        $php .= "    {\n";

        $currentPage = null;

        foreach ($contents as $content) {
            // Add comment for new page sections
            if ($currentPage !== $content->page_slug) {
                $currentPage = $content->page_slug;
                $pageTitle = ucwords(str_replace(['_', '-'], ' ', $currentPage));
                $php .= "\n        // {$pageTitle} Page Sections\n";
            }

            $php .= $this->generateUpdateOrCreate($content);
        }

        $php .= "    }\n";
        $php .= "}\n";

        return $php;
    }

    /**
     * Generate the updateOrCreate statement for a single record.
     */
    private function generateUpdateOrCreate(PageContent $content): string
    {
        $contentJson = $this->formatArray($content->content, 4);

        return "        PageContent::updateOrCreate(\n" .
               "            ['page_slug' => '{$content->page_slug}', 'section_slug' => '{$content->section_slug}'],\n" .
               "            [\n" .
               "                'section_title' => " . $this->varExport($content->section_title) . ",\n" .
               "                'content' => {$contentJson},\n" .
               "                'order' => {$content->order},\n" .
               "                'is_active' => " . ($content->is_active ? 'true' : 'false') . ",\n" .
               "            ]\n" .
               "        );\n\n";
    }

    /**
     * Format an array for output with proper indentation.
     */
    private function formatArray(array $array, int $indentLevel = 0): string
    {
        $indent = str_repeat('    ', $indentLevel);
        $innerIndent = str_repeat('    ', $indentLevel + 1);

        $items = [];
        foreach ($array as $key => $value) {
            $formattedValue = is_string($value) ? $this->varExport($value) : var_export($value, true);
            $items[] = "{$innerIndent}'{$key}' => {$formattedValue}";
        }

        return "[\n" . implode(",\n", $items) . ",\n{$indent}]";
    }

    /**
     * Export a string value properly escaped.
     */
    private function varExport(string $value): string
    {
        $escaped = str_replace("'", "\\'", $value);
        return "'{$escaped}'";
    }
}

