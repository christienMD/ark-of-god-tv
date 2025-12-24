<?php

namespace App\Filament\Resources\PageContents\Pages;

use App\Filament\Resources\PageContents\PageContentResource;
use App\Filament\Resources\PageContents\Schemas\PageContentForm;
use Filament\Resources\Pages\EditRecord;
use Filament\Schemas\Schema;

class EditPageContent extends EditRecord
{
    protected static string $resource = PageContentResource::class;

    public function form(Schema $schema): Schema
    {
        return PageContentForm::configure($schema, $this->record);
    }

    protected function getHeaderActions(): array
    {
        return [];
    }

    protected function getRedirectUrl(): string
    {
        return $this->getResource()::getUrl('index');
    }
}

