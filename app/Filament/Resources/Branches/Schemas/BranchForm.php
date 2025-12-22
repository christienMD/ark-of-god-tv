<?php

namespace App\Filament\Resources\Branches\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Repeater;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class BranchForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Branch Information')
                    ->schema([
                        TextInput::make('name')
                            ->label('Branch Name')
                            ->required()
                            ->maxLength(255)
                            ->live(onBlur: true)
                            ->afterStateUpdated(fn (string $operation, $state, callable $set) => 
                                $operation === 'create' ? $set('slug', Str::slug($state)) : null
                            )
                            ->helperText('e.g., Limbe AGCOM, AGCOM USA'),
                        
                        TextInput::make('slug')
                            ->label('URL Slug')
                            ->required()
                            ->maxLength(255)
                            ->unique(ignoreRecord: true)
                            ->helperText('URL-friendly version of the branch name'),
                        
                        Textarea::make('location')
                            ->label('Location')
                            ->rows(2)
                            ->maxLength(500)
                            ->helperText('Branch address or location description'),
                        
                        Toggle::make('is_active')
                            ->label('Active Status')
                            ->default(true)
                            ->helperText('Toggle to activate/deactivate this branch'),
                    ])
                    ->columns(2),
                
                Section::make('Images')
                    ->schema([
                        FileUpload::make('featured_image')
                            ->label('Featured Image')
                            ->image()
                            ->required()
                            ->disk('public')
                            ->directory('branches')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxSize(2048)
                            ->helperText('Main card image for the branch'),
                        
                        FileUpload::make('slider_images')
                            ->label('Slider Images')
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('branches/sliders')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxFiles(5)
                            ->maxSize(2048)
                            ->reorderable()
                            ->helperText('Upload 3-5 images for the detail page slider')
                            ->columnSpanFull(),
                        
                        FileUpload::make('entry_images')
                            ->label('Entry Images')
                            ->image()
                            ->multiple()
                            ->disk('public')
                            ->directory('branches/entries')
                            ->visibility('public')
                            ->imageEditor()
                            ->maxFiles(2)
                            ->maxSize(2048)
                            ->reorderable()
                            ->helperText('2 bottom images for the detail page')
                            ->columnSpanFull(),
                    ])
                    ->columns(2),
                
                Section::make('Content')
                    ->schema([
                        RichEditor::make('description')
                            ->label('Description')
                            ->required()
                            ->toolbarButtons([
                                'blockquote',
                                'bold',
                                'bulletList',
                                'codeBlock',
                                'h2',
                                'h3',
                                'italic',
                                'link',
                                'orderedList',
                                'redo',
                                'strike',
                                'underline',
                                'undo',
                            ])
                            ->columnSpanFull()
                            ->helperText('Full HTML description of the branch'),
                        
                        TextInput::make('features_title')
                            ->label('Features Section Title')
                            ->maxLength(255)
                            ->placeholder('e.g., Limbe AGCOM Features')
                            ->helperText('Title for the features section'),
                        
                        Repeater::make('features')
                            ->label('Features List')
                            ->simple(
                                TextInput::make('feature')
                                    ->label('Feature')
                                    ->required()
                            )
                            ->addActionLabel('Add Feature')
                            ->collapsible()
                            ->columnSpanFull()
                            ->helperText('List of branch features or highlights'),
                    ]),
                
                Section::make('Schedule & Meeting Times')
                    ->schema([
                        Repeater::make('meeting_times')
                            ->label('Meeting Times')
                            ->simple(
                                TextInput::make('time')
                                    ->label('Meeting Time')
                                    ->placeholder('e.g., Sundays, 9:00am - 12:00pm')
                                    ->required()
                            )
                            ->addActionLabel('Add Meeting Time')
                            ->collapsible()
                            ->columnSpanFull(),
                        
                        Repeater::make('schedule')
                            ->label('Daily Schedule')
                            ->simple(
                                TextInput::make('schedule_item')
                                    ->label('Schedule Item')
                                    ->placeholder('e.g., 10:00 AM - Welcome and fellowship')
                                    ->required()
                            )
                            ->addActionLabel('Add Schedule Item')
                            ->collapsible()
                            ->columnSpanFull(),
                    ]),
            ]);
    }
}
