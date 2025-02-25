<?php

namespace App\Filament\Resources\MetriEventResource\Pages;

use App\Filament\Resources\MetriEventResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriEvents extends ListRecords
{
    protected static string $resource = MetriEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
