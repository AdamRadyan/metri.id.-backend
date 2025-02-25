<?php

namespace App\Filament\Resources\MetriFilmEquipmentResource\Pages;

use App\Filament\Resources\MetriFilmEquipmentResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriFilmEquipment extends EditRecord
{
    protected static string $resource = MetriFilmEquipmentResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
