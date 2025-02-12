<?php

namespace App\Filament\Resources;

use App\Filament\Resources\WaterSourceResource\Pages;
use App\Filament\Resources\WaterSourceResource\RelationManagers;
use App\Models\WaterSource;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class WaterSourceResource extends Resource
{
    protected static ?string $model = WaterSource::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationLabel = 'Profil Sumber';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('source_name')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('source_code')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('source_type')
                    ->required(),
                Forms\Components\TextInput::make('source_status')
                    ->required(),
                Forms\Components\TextInput::make('capacity_flow_lps')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('village')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('district')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('city')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('province')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('latitude')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('longitude')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('elevation_masl')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('manager')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('exploration_year'),
                Forms\Components\TextInput::make('operational_year'),
                Forms\Components\Textarea::make('utilization_system')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('number_of_pumps')
                    ->required()
                    ->numeric()
                    ->default(0),
                Forms\Components\TextInput::make('ownership_status')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('notes')
                    ->columnSpanFull(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('source_name')
                    ->searchable(),
                Tables\Columns\TextColumn::make('source_code')
                    ->searchable(),
                Tables\Columns\TextColumn::make('source_type'),
                Tables\Columns\TextColumn::make('source_status'),
                Tables\Columns\TextColumn::make('capacity_flow_lps')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('village')
                    ->searchable(),
                Tables\Columns\TextColumn::make('district')
                    ->searchable(),
                Tables\Columns\TextColumn::make('city')
                    ->searchable(),
                Tables\Columns\TextColumn::make('province')
                    ->searchable(),
                Tables\Columns\TextColumn::make('latitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('longitude')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('elevation_masl')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('manager')
                    ->searchable(),
                Tables\Columns\TextColumn::make('exploration_year'),
                Tables\Columns\TextColumn::make('operational_year'),
                Tables\Columns\TextColumn::make('number_of_pumps')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('ownership_status')
                    ->searchable(),
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
            'index' => Pages\ListWaterSources::route('/'),
            'create' => Pages\CreateWaterSource::route('/create'),
            'edit' => Pages\EditWaterSource::route('/{record}/edit'),
        ];
    }
}
