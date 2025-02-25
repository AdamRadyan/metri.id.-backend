<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetriDesignResource\Pages;
use App\Models\MetriDesign;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class MetriDesignResource extends Resource
{
    protected static ?string $model = MetriDesign::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('youtube_link')
                    ->label('YouTube Link')
                    ->required()
                    ->url()
                    ->placeholder('https://www.youtube.com/watch?v=example'),

                Forms\Components\FileUpload::make('video')
                    ->label('Upload Video')
                    ->directory('videos')
                    ->acceptedFileTypes(['video/mp4', 'video/mov', 'video/avi'])
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_1')
                    ->label('Foto 1')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_2')
                    ->label('Foto 2')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_3')
                    ->label('Foto 3')
                    ->directory('photos')
                    ->image()
                    ->nullable(),

                Forms\Components\FileUpload::make('photo_4')
                    ->label('Foto 4')
                    ->directory('photos')
                    ->image()
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('youtube_link')
                    ->label('YouTube Link')
                    ->url(fn ($record) => $record->youtube_link, true)
                    ->searchable(),

                Tables\Columns\ImageColumn::make('photo_1')->label('Foto 1'),
                Tables\Columns\ImageColumn::make('photo_2')->label('Foto 2'),
                Tables\Columns\ImageColumn::make('photo_3')->label('Foto 3'),
                Tables\Columns\ImageColumn::make('photo_4')->label('Foto 4'),
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
        return [];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriDesigns::route('/'),
            'create' => Pages\CreateMetriDesign::route('/create'),
            'edit' => Pages\EditMetriDesign::route('/{record}/edit'),
        ];
    }
}
