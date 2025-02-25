<?php

namespace App\Filament\Resources\MetriLandingPageResource\Pages;

use App\Filament\Resources\MetriLandingPageResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriLandingPage extends EditRecord
{
    protected static string $resource = MetriLandingPageResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
