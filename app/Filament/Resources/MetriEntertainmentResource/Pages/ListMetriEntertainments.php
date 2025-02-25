<?php

namespace App\Filament\Resources\MetriEntertainmentResource\Pages;

use App\Filament\Resources\MetriEntertainmentResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriEntertainments extends ListRecords
{
    protected static string $resource = MetriEntertainmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
