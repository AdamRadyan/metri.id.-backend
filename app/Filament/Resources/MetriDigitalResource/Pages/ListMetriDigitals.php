<?php

namespace App\Filament\Resources\MetriDigitalResource\Pages;

use App\Filament\Resources\MetriDigitalResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriDigitals extends ListRecords
{
    protected static string $resource = MetriDigitalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
