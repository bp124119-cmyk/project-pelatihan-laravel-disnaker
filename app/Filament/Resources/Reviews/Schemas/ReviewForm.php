<?php

namespace App\Filament\Resources\Reviews\Schemas;

use Filament\Forms\Components\Textarea;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Toggle;
use Filament\Schemas\Components\Section;
use Filament\Schemas\Schema;

class ReviewForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                Section::make('Detail Review')
                    ->schema([
                        TextInput::make('review_name')
                            ->label('Nama Pemberi Review')
                            ->required()
                            ->maxLength(255),

                        TextInput::make('review_position')
                            ->label('Jabatan / Posisi')
                            ->required()
                            ->maxLength(255),

                        Textarea::make('review_content')
                            ->label('Isi Review')
                            ->required()
                            ->rows(4)
                            ->columnSpanFull(),

                        Toggle::make('is_visible')
                            ->label('Tampilkan di Landing Page')
                            ->default(true),
                    ])->columns(2),
            ]);
    }
}