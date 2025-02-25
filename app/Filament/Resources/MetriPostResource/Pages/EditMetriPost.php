<?php

namespace App\Filament\Resources\MetriPostResource\Pages;

use App\Filament\Resources\MetriPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriPost extends EditRecord
{
    protected static string $resource = MetriPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
