<?php

namespace App\Filament\Resources\Categories\Schemas;

use App\Models\Category;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Grid;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Components\Utilities\Set;
use Filament\Schemas\Schema;
use Illuminate\Support\Str;

class CategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->columns(3)
            ->components([
                Grid::make()
                    ->columnSpan(2)
                    ->schema([
                        TextInput::make('name')
                            ->required()
                            ->live(onBlur: true)
                            ->maxLength(255)
                            ->afterStateUpdated(fn (string $operation, $state, Set $set) => $operation === 'create' ? $set('slug', Str::slug($state)) : null)
                            ->columnSpan(1),

                        TextInput::make('slug')
                            ->disabled()
                            ->dehydrated()
                            ->required()
                            ->maxLength(255)
                            ->unique(Category::class, 'slug', ignoreRecord: true)
                            ->columnSpan(1),

                        Textarea::make('description')
                            ->columnSpanFull(),
                    ]),
                Grid::make()
                    ->columnSpan(1)
                    ->schema([
                        Section::make('Status')
                            ->schema([
                                Toggle::make('is_visible')
                                    ->required(),

                                Select::make('template')
                                    ->options([
                                        'category_1' => 'Category 1',
                                        'category_2' => 'Category 2',
                                        'category_3' => 'Category 3',
                                        'category_4' => 'Category 4',
                                        'category_5' => 'Category 5',
                                    ])
                            ])->columnSpanFull(),

                        Section::make('Seo')
                            ->schema([
                                TextInput::make('seo_title'),
                                Textarea::make('seo_description'),
                            ])->columnSpanFull(),
                    ])
            ]);
    }
}
