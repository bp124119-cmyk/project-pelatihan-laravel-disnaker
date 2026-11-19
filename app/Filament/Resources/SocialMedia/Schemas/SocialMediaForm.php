<?php

namespace App\Filament\Resources\SocialMedia\Schemas;

use Filament\Forms\Components\TextInput;
use Filament\Schemas\Schema;

class SocialMediaForm
{
    public static function configure(Schema $schema): Schema
    {
        return $schema
            ->components([
                TextInput::make('sosial_media_name')
                    ->label('Nama Social Media')
                    ->required()
                    ->maxLength(255),

                TextInput::make('sosial_media_link')
                    ->label('Link Social Media')
                    ->required()
                    ->maxLength(255),

                TextInput::make('sosial_media_icon')
                    ->label('Icon Social Media')
                    ->required()
                    ->maxLength(255),
            ]);
    }
}
