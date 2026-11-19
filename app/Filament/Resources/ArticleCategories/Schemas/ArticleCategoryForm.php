<?php

namespace App\Filament\Resources\ArticleCategories\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleCategoryForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Kategori Artikel')
                    ->schema([
                        TextInput::make('articles_category_name')
                            ->label('Nama Kategori')
                            ->required()
                            ->maxLength(255),
                    ]),
            ]);
    }
}