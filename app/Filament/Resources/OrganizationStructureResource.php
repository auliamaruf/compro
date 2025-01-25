<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OrganizationStructureResource\Pages;
use App\Models\OrganizationStructure;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\Timeline;
use Filament\Widgets\TimelineItem;

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
                Forms\Components\TextInput::make('position_name')
                    ->label('Nama Posisi')
                    ->required(),
                Forms\Components\Select::make('supervisor_id')
                    ->label('Atasan')
                    ->relationship('supervisor', 'position_name')
                    ->nullable(),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi Posisi')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('position_name')
                    ->label('Nama Posisi'),
                Tables\Columns\TextColumn::make('supervisor.position_name')
                    ->label('Atasan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('description')
                    ->label('Deskripsi')
                    ->limit(50),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
            ]);
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
