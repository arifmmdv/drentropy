<?php

namespace App\Filament\Resources\Blogs\Schemas;

use App\Models\Blog;
use Filament\Forms\Components\DatePicker;
use Filament\Forms\Components\SpatieMediaLibraryFileUpload;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Toggle;
use Filament\Forms\Components\Builder;
use Filament\Schemas\Schema;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Builder\Block;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Grid;
use Illuminate\Support\Str;
use Filament\Schemas\Components\Utilities\Set;

class BlogForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                // Left side (2 columns)
                Grid::make()
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('title')
                            ->required()
                            ->live(onBlur: true)
                            ->maxLength(255)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->columnSpanFull(),

                        Select::make('category_id')
                            ->relationship('category','name')
                            ->required()
                            ->columnSpan(1),

                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Blog::class, 'slug', ignoreRecord: true)
                            ->columnSpan(1),

                        RichEditor::make('content')
                            ->columnSpanFull(),

                        Builder::make('more_content')
                            ->blocks([
                                Block::make('content')
                                    ->schema([
                                        RichEditor::make('content')
                                            ->label('Content')
                                            ->required(),
                                    ]),
                            ])
                            ->columnSpanFull(),
                    ]),

                // Right side (1 column)
                Grid::make()
                    ->columnSpan(1)
                    ->schema([
                        Section::make('Status')
                            ->schema([
                                Toggle::make('is_visible')
                                    ->required(),

                                DatePicker::make('published_at'),

                                Select::make('template')
                                    ->options([
                                        'blog_details_1' => 'Blog details 1',
                                        'blog_details_2' => 'Blog details 2',
                                        'blog_details_3' => 'Blog details 3',
                                    ])
                            ])->columnSpanFull(),

                        Section::make('Media')
                            ->schema([
                                SpatieMediaLibraryFileUpload::make('image')
                                    ->conversion('thumb')
                                    ->conversion('grid')
                                    ->conversion('preview')
                            ])->columnSpanFull(),

                        Section::make('Seo')
                            ->schema([
                                TextInput::make('seo_title'),
                                Textarea::make('seo_description'),
                            ])->columnSpanFull(),
                    ]),
            ]);
    }
}
