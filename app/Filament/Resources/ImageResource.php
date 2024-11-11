<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ImageResource\Pages;
use App\Filament\Resources\ImageResource\RelationManagers;
use App\Models\Image;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Livewire;

class ImageResource extends Resource
{
    protected static ?string $model = Image::class;
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $navigationGroup = 'CMS';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Toggle::make('is_html')
                    ->live()
                    ->required(),
                Forms\Components\TextArea::make('content')
                    ->visible(fn (Get $get, string $operation, ?Model $record): bool => ($operation === 'create' && (bool)$get('is_html')))
                    ->required(fn (Get $get, string $operation, ?Model $record): bool => ($operation === 'create' && (bool)$get('is_html')) || ($operation === 'edit' && (bool)$record->is_html))
                    ->label('Image')
                    ->maxLength(255)
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('content')
                    ->label('Upload Image')
                    ->multiple(false)
                    ->hidden(fn (Get $get, string $operation): bool => ($operation === 'create' && (bool)$get('is_html')))
                    ->required(fn (Get $get, string $operation, ?Model $record): bool => ($operation === 'create' && !(bool)$get('is_html')) || ($operation === 'edit' && !(bool)$record->is_html))
                    ->maxFiles(1)
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('desc')
                    ->required()
                    ->maxLength(16777215)
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('alt')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('content')
                    ->searchable(),
                Tables\Columns\TextColumn::make('alt')
                    ->searchable(),
                Tables\Columns\IconColumn::make('is_html')
                    ->boolean(),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ManageImages::route('/'),
        ];
    }
}
