<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationStructureResource\Pages;
use App\Models\OrganizationStructure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class OrganizationStructureResource extends Resource
{
    protected static ?string $model = OrganizationStructure::class;

    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?string $navigationLabel = 'Struktur Organisasi';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-group';
    protected static ?int $navigationSort = 2;
    protected static ?string $label = 'Struktur Organisasi';
    protected static ?string $pluralLabel = 'Struktur Organisasi';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('name')
                    ->label('Nama')
                    ->required(),
                Forms\Components\TextInput::make('position_name')
                    ->label('Nama Posisi')
                    ->required(),
                Forms\Components\Select::make('supervisor_id')
                    ->label('Atasan')
                    ->relationship('supervisor', 'position_name')
                    ->nullable(),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->nullable(),
                Forms\Components\TextInput::make('level')
                    ->label('Level')
                    ->type('number')
                    ->default(0),
                Forms\Components\TextInput::make('order')
                    ->label('Urutan')
                    ->type('number')
                    ->default(0),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name')
                    ->label('Nama')
                    ->searchable(),
                Tables\Columns\TextColumn::make('position_name')
                    ->label('Nama Posisi')
                    ->searchable(),
                Tables\Columns\TextColumn::make('supervisor.position_name')
                    ->label('Atasan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('level')
                    ->label('Level'),
                Tables\Columns\TextColumn::make('order')
                    ->label('Urutan'),
            ])
            ->defaultSort('level', 'asc')
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
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
            'index' => Pages\ListOrganizationStructures::route('/'),
            'create' => Pages\CreateOrganizationStructure::route('/create'),
            'edit' => Pages\EditOrganizationStructure::route('/{record}/edit'),
        ];
    }
}
