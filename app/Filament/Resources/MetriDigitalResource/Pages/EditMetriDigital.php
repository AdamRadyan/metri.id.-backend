<?php

namespace App\Filament\Resources\MetriDigitalResource\Pages;

use App\Filament\Resources\MetriDigitalResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriDigital extends EditRecord
{
    protected static string $resource = MetriDigitalResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
