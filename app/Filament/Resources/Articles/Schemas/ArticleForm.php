<?php

namespace App\Filament\Resources\Articles\Schemas;

use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\Select;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ArticleForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Konten Artikel')
                    ->schema([
                        Select::make('articles_category_id')
                            ->label('Kategori Artikel')
                            ->relationship('category', 'articles_category_name')
                            ->searchable()
                            ->preload()
                            ->required(),

                        TextInput::make('article_title')
                            ->label('Judul Artikel')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('article_excerpt')
                            ->label('Ringkasan Singkat')
                            ->required()
                            ->rows(2)
                            ->columnSpanFull(),

                        RichEditor::make('article_content')
                            ->label('Isi Artikel Lengkap')
                            ->required()
                            ->columnSpanFull(),

                        FileUpload::make('article_image')
                            ->label('Gambar Cover')
                            ->image()
                            ->disk('public')
                            ->directory('articles')
                            ->columnSpanFull(),

                        Toggle::make('is_published')
                            ->label('Terbitkan Artikel')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}