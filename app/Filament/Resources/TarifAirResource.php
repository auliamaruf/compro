<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarifAirResource\Pages;
use App\Filament\Resources\TarifAirResource\RelationManagers;
use App\Models\TarifAir;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TarifAirResource extends Resource
{
    protected static ?string $model = TarifAir::class;

    protected static ?string $navigationIcon = 'heroicon-o-banknotes';

    protected static ?string $navigationLabel = 'Tarif Air';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return 'success';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Golongan')
                    ->schema([
                        Forms\Components\Select::make('golongan')
                            ->required()
                            ->label('Golongan')
                            ->placeholder('Pilih golongan')
                            ->options([
                                'Sosial' => 'Sosial',
                                'Non Niaga' => 'Non Niaga',
                                'Niaga' => 'Niaga',
                                'Industri' => 'Industri',
                            ])
                            ->live()
                            ->preload()
                            ->searchable()
                            ->rules(['required', 'string', 'max:255'])
                            ->validationMessages([
                                'required' => 'Golongan harus diisi',
                                'string' => 'Golongan harus berupa teks',
                                'max' => 'Golongan maksimal 255 karakter',
                            ]),
                        Forms\Components\TextInput::make('sub_golongan')
                            ->required()
                            ->maxLength(255)
                            ->label('Sub Golongan')
                            ->placeholder('Masukkan sub golongan')
                            ->rules(['required', 'string', 'max:255'])
                            ->validationMessages([
                                'required' => 'Sub golongan harus diisi',
                                'string' => 'Sub golongan harus berupa teks',
                                'max' => 'Sub golongan maksimal 255 karakter',
                            ]),
                    ])->columns(2),

                Forms\Components\Section::make('Informasi Tarif')
                    ->schema([
                        Forms\Components\TextInput::make('tarif_0_10')
                            ->required()
                            ->numeric()
                            ->label('Tarif 0-10')
                            ->placeholder('Masukkan tarif')
                            ->rules(['required', 'numeric', 'min:0'])
                            ->validationMessages([
                                'required' => 'Tarif harus diisi',
                                'numeric' => 'Tarif harus berupa angka',
                                'min' => 'Tarif minimal 0',
                            ]),
                        Forms\Components\TextInput::make('tarif_11_20')
                            ->required()
                            ->numeric()
                            ->label('Tarif 11-20')
                            ->placeholder('Masukkan tarif')
                            ->rules(['required', 'numeric', 'min:0'])
                            ->validationMessages([
                                'required' => 'Tarif harus diisi',
                                'numeric' => 'Tarif harus berupa angka',
                                'min' => 'Tarif minimal 0',
                            ]),
                        Forms\Components\TextInput::make('tarif_21_30')
                            ->required()
                            ->numeric()
                            ->label('Tarif 21-30')
                            ->placeholder('Masukkan tarif')
                            ->rules(['required', 'numeric', 'min:0'])
                            ->validationMessages([
                                'required' => 'Tarif harus diisi',
                                'numeric' => 'Tarif harus berupa angka',
                                'min' => 'Tarif minimal 0',
                            ]),
                        Forms\Components\TextInput::make('tarif_lebih_30')
                            ->required()
                            ->numeric()
                            ->label('Tarif >30')
                            ->placeholder('Masukkan tarif')
                            ->rules(['required', 'numeric', 'min:0'])
                            ->validationMessages([
                                'required' => 'Tarif harus diisi',
                                'numeric' => 'Tarif harus berupa angka',
                                'min' => 'Tarif minimal 0',
                            ]),
                    ])->columns(2),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('golongan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sub_golongan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('tarif_0_10')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tarif_11_20')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tarif_21_30')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('tarif_lebih_30')
                    ->numeric()
                    ->sortable(),
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
            'index' => Pages\ListTarifAirs::route('/'),
            'create' => Pages\CreateTarifAir::route('/create'),
            'edit' => Pages\EditTarifAir::route('/{record}/edit'),
        ];
    }
}
