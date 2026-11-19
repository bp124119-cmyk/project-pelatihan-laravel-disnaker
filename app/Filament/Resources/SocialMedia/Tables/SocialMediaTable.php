<?php

namespace App\Filament\Resources\SocialMedia\Tables;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class SocialMediaTable
{
    public static function configure(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('sosial_media_name')
                    ->label('Nama Social Media')
                    ->searchable()
                    ->sortable(),

                TextColumn::make('sosial_media_link')
                    ->label('Link Social Media')
                    ->searchable()
                    ->limit(40),

                TextColumn::make('sosial_media_icon')
                    ->label('Icon Social Media'),
            ])
            ->defaultSort('id', 'desc');
    }
}
