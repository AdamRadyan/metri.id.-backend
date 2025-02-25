<?php

namespace App\Filament\Resources\MetriDesignResource\Pages;

use App\Filament\Resources\MetriDesignResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriDesign extends EditRecord
{
    protected static string $resource = MetriDesignResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
