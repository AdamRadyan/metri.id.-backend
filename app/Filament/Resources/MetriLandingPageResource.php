<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetriLandingPageResource\Pages;
use App\Models\MetriLandingPage;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\Section;
use Illuminate\Support\Str;

class MetriLandingPageResource extends Resource
{
    protected static ?string $model = MetriLandingPage::class;
    protected static ?string $navigationIcon = 'heroicon-o-home';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Section::make('Input Data')
                    ->schema([
                        TextInput::make('angka_1')
                            ->label('ANGKA 1')
                            ->numeric()
                            ->maxLength(10),

                        TextInput::make('angka_2')
                            ->label('ANGKA 2')
                            ->numeric()
                            ->maxLength(10),

                        TextInput::make('angka_3')
                            ->label('ANGKA 3')
                            ->numeric()
                            ->maxLength(10),

                        TextInput::make('angka_4')
                            ->label('ANGKA 4')
                            ->numeric()
                            ->maxLength(10),

                        TextInput::make('youtube_link')
                            ->label('YouTube Link')
                            ->url(),

                        FileUpload::make('image')
                            ->label('Upload Image')
                            ->image()
                            ->directory('metri_landing_images'),

                        FileUpload::make('video')
                            ->label('Upload Video')
                            ->directory('metri_landing_videos')
                            ->acceptedFileTypes(['video/mp4', 'video/mov', 'video/avi']),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('angka_1')->label('ANGKA 1'),
                Tables\Columns\TextColumn::make('angka_2')->label('ANGKA 2'),
                Tables\Columns\TextColumn::make('angka_3')->label('ANGKA 3'),
                Tables\Columns\TextColumn::make('angka_4')->label('ANGKA 4'),
                Tables\Columns\TextColumn::make('youtube_link')->label('YouTube Link')->limit(30),
                Tables\Columns\ImageColumn::make('image')->label('Image'),
                Tables\Columns\TextColumn::make('video')->label('Video')->limit(30),
                Tables\Columns\TextColumn::make('created_at')->label('Created At')->dateTime(),
            ])
            ->filters([])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriLandingPages::route('/'),
            'create' => Pages\CreateMetriLandingPage::route('/create'),
            'edit' => Pages\EditMetriLandingPage::route('/{record}/edit'),
        ];
    }
}
