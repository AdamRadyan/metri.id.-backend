<?php

namespace App\Filament\Resources\MetriEventResource\Pages;

use App\Filament\Resources\MetriEventResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriEvent extends EditRecord
{
    protected static string $resource = MetriEventResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
