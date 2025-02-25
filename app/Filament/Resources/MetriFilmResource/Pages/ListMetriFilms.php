<?php

namespace App\Filament\Resources\MetriFilmResource\Pages;

use App\Filament\Resources\MetriFilmResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriFilms extends ListRecords
{
    protected static string $resource = MetriFilmResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
