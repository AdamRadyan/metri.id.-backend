<?php

namespace App\Filament\Resources\MetriDesignPostResource\Pages;

use App\Filament\Resources\MetriDesignPostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditMetriDesignPost extends EditRecord
{
    protected static string $resource = MetriDesignPostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
