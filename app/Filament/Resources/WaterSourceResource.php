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
                Forms\Components\Section::make('Basic Information')
                    ->schema([
                        Forms\Components\TextInput::make('source_name')
                            ->required()
                            ->maxLength(255)
                            ->label('Nama Sumber'),
                        Forms\Components\TextInput::make('source_code')
                            ->required()
                            ->maxLength(255)
                            ->label('Kode Sumber'),
                        Forms\Components\Select::make('source_type')
                            ->required()
                            ->options([
                                'spring' => 'Spring',
                                'well' => 'Well',
                                'river' => 'River',
                                'lake' => 'Lake',
                                'reservoir' => 'Reservoir'
                            ])
                            ->label('Tipe Sumber'),
                        Forms\Components\Select::make('source_status')
                            ->required()
                            ->options([
                                'active' => 'Active',
                                'inactive' => 'Inactive',
                                'maintenance' => 'Maintenance',
                                'planning' => 'Planning'
                            ])
                            ->label('Status'),
                    ])->columns(2),

                Forms\Components\Section::make('Location Details')
                    ->schema([
                        Forms\Components\TextInput::make('village')
                            ->required()
                            ->maxLength(255)
                            ->label('Desa'),
                        Forms\Components\TextInput::make('district')
                            ->required()
                            ->maxLength(255)
                            ->label('Kecamatan'),
                        Forms\Components\TextInput::make('city')
                            ->required()
                            ->maxLength(255)
                            ->label('Kota'),
                        Forms\Components\TextInput::make('province')
                            ->required()
                            ->maxLength(255)
                            ->label('Provinsi'),
                    ])->columns(2),

                Forms\Components\Section::make('Technical Details')
                    ->schema([
                        Forms\Components\TextInput::make('capacity_flow_lps')
                            ->required()
                            ->numeric()
                            ->label('Kapasitas (L/s)')
                            ->suffix('L/s'),
                        Forms\Components\TextInput::make('latitude')
                            ->required()
                            ->numeric()
                            ->label('Latitude'),
                        Forms\Components\TextInput::make('longitude')
                            ->required()
                            ->numeric()
                            ->label('Longitude'),
                        Forms\Components\TextInput::make('elevation_masl')
                            ->required()
                            ->numeric()
                            ->label('Elevasi (MASL)')
                            ->suffix('m'),
                    ])->columns(2),

                Forms\Components\Section::make('Management Information')
                    ->schema([
                        Forms\Components\TextInput::make('manager')
                            ->required()
                            ->maxLength(255)
                            ->label('Pengelola'),
                        Forms\Components\TextInput::make('exploration_year')
                            ->numeric()
                            ->label('Tahun Eksplorasi'),
                        Forms\Components\TextInput::make('operational_year')
                            ->numeric()
                            ->label('Tahun Operasional'),
                        Forms\Components\Select::make('ownership_status')
                            ->required()
                            ->options([
                                'Government' => 'Government',
                                'Private' => 'Private',
                                'Joint venture' => 'Joint Venture',
                                'Public' => 'Public'
                            ])
                            ->label('Status Kepemilikan'),
                    ])->columns(2),

                Forms\Components\Section::make('Additional Information')
                    ->schema([
                        Forms\Components\Textarea::make('utilization_system')
                            ->label('Sistem Pemanfaatan'),
                        Forms\Components\TextInput::make('number_of_pumps')
                            ->required()
                            ->numeric()
                            ->default(0)
                            ->label('Jumlah Pompa'),
                        Forms\Components\Textarea::make('notes')
                            ->label('Catatan'),
                    ])->columns(1),
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
