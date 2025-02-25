<?php

namespace App\Filament\Resources\MetriDesignResource\Pages;

use App\Filament\Resources\MetriDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriDesigns extends ListRecords
{
    protected static string $resource = MetriDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
