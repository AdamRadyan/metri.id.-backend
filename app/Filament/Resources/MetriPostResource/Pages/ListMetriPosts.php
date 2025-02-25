<?php

namespace App\Filament\Resources\MetriPostResource\Pages;

use App\Filament\Resources\MetriPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriPosts extends ListRecords
{
    protected static string $resource = MetriPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
