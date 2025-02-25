<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetriEventResource\Pages;
use App\Filament\Resources\MetriEventResource\RelationManagers;
use App\Models\MetriEvent;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetriEventResource extends Resource
{
    protected static ?string $model = MetriEvent::class;
    protected static ?string $navigationGroup = 'Metri Event';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                //
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriEvents::route('/'),
            'create' => Pages\CreateMetriEvent::route('/create'),
            'edit' => Pages\EditMetriEvent::route('/{record}/edit'),
        ];
    }
}
