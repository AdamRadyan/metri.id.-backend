<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetriEntertainmentResource\Pages;
use App\Filament\Resources\MetriEntertainmentResource\RelationManagers;
use App\Models\MetriEntertainment;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MetriEntertainmentResource extends Resource
{
    protected static ?string $model = MetriEntertainment::class;
    protected static ?string $navigationGroup = 'Metri Entertaiment';
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
            'index' => Pages\ListMetriEntertainments::route('/'),
            'create' => Pages\CreateMetriEntertainment::route('/create'),
            'edit' => Pages\EditMetriEntertainment::route('/{record}/edit'),
        ];
    }
}
