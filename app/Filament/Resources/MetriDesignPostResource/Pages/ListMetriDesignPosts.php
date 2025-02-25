<?php

namespace App\Filament\Resources\MetriDesignPostResource\Pages;

use App\Filament\Resources\MetriDesignPostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMetriDesignPosts extends ListRecords
{
    protected static string $resource = MetriDesignPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
