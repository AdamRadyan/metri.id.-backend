<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MetriDesignPostResource\Pages;
use App\Models\MetriDesignPost;
use Filament\Forms;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Forms\Components\FileUpload;
use Filament\Forms\Components\RichEditor;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\Textarea;
use Filament\Tables\Columns\ImageColumn;
use Filament\Tables\Columns\TextColumn;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Illuminate\Support\Str;

class MetriDesignPostResource extends Resource
{
    protected static ?string $model = MetriDesignPost::class;
    protected static ?string $navigationGroup = 'Metri Design';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form->schema([
            TextInput::make('title')
                ->required()
                ->maxLength(255)
                ->reactive()
                ->afterStateUpdated(fn (Get $get, Set $set) => 
                    $set('slug', Str::slug($get('title')))
                ),

            TextInput::make('slug')
                ->required()
                ->maxLength(255)
                ->unique(ignoreRecord: true)
                ->readonly(),

            RichEditor::make('content')->required(),

            // Informasi tambahan
            TextInput::make('client_name')->label('Nama Client'),
            TextInput::make('year')->label('Year')->numeric(),
            TextInput::make('category')->label('Category'),
            TextInput::make('industry')->label('Industry'),
            RichEditor::make('concept')->label('Concept'),
            RichEditor::make('objective')->label('Objective'),
            RichEditor::make('challenge')->label('Challenge'),
            RichEditor::make('results')->label('Results'),

            // Input foto/video (tanpa `video()`)
            FileUpload::make('gambar_1')
                ->directory('metri_design_posts')
            
                ->label('Foto/Video 1')
                ->nullable(),

            FileUpload::make('gambar_2')
                ->directory('metri_design_posts')
            
                ->nullable(),

            FileUpload::make('gambar_3')
                ->directory('metri_design_posts')
            
                ->nullable(),

            FileUpload::make('gambar_4')
                ->directory('metri_design_posts')
            
                ->label('Foto/Video 4')
                ->nullable(),

            TextInput::make('link')->url()->nullable(),
        ]);
    }
    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                TextColumn::make('title')->sortable()->searchable(),
                TextColumn::make('slug')->sortable()->searchable(),
                
                TextColumn::make('client_name')->label('Nama Client')->sortable()->searchable(),
                TextColumn::make('year')->label('Year')->sortable()->searchable(),
                TextColumn::make('category')->label('Category')->sortable()->searchable(),
                TextColumn::make('industry')->label('Industry')->sortable()->searchable(),
                
                ImageColumn::make('gambar_1')->label('GAMBAR 1'),
                ImageColumn::make('gambar_2')->label('GAMBAR 2'),
                ImageColumn::make('gambar_3')->label('GAMBAR 3'),
                ImageColumn::make('gambar_4')->label('GAMBAR 4'),
    
                TextColumn::make('concept')->label('Concept')->limit(50),
                TextColumn::make('objective')->label('Objective')->limit(50),
                TextColumn::make('challenge')->label('Challenge')->limit(50),
                TextColumn::make('results')->label('Results')->limit(50),
    
                TextColumn::make('content')->limit(50),
                TextColumn::make('link')->limit(30),
                TextColumn::make('created_at')->dateTime(),
            ])
            ->filters([]);
    }
    
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMetriDesignPosts::route('/'),
            'create' => Pages\CreateMetriDesignPost::route('/create'),
            'edit' => Pages\EditMetriDesignPost::route('/{record}/edit'),
        ];
    }
}
