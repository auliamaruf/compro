<?php

namespace App\Filament\Resources;

use App\Filament\Resources\TarifAbonemenResource\Pages;
use App\Filament\Resources\TarifAbonemenResource\RelationManagers;
use App\Models\TarifAbonemen;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class TarifAbonemenResource extends Resource
{
    protected static ?string $model = TarifAbonemen::class;

    protected static ?string $navigationIcon = 'heroicon-o-currency-dollar';

    protected static ?string $navigationLabel = 'Tarif Abonemen';

    protected static ?string $navigationGroup = 'Master Data';

    protected static ?int $navigationSort = 2;

    public static function getNavigationBadge(): ?string
    {
        return static::getModel()::count();
    }

    public static function getNavigationBadgeColor(): ?string
    {
        return static::getModel()::count() > 10 ? 'warning' : 'primary';
    }

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Tarif')
                    ->description('Masukkan informasi tarif abonemen')
                    ->schema([
                        Forms\Components\Select::make('golongan')
                            ->required()
                            ->options([
                                'Sosial' => 'Sosial',
                                'Non Niaga' => 'Non Niaga',
                                'Niaga' => 'Niaga',
                                'Industri' => 'Industri',
                            ])
                            ->placeholder('Pilih golongan')
                            ->searchable()
                            ->preload()
                            ->live()
                            ->native(false)
                            ->afterStateUpdated(function (string $state, Forms\Set $set) {
                                $set('sub_golongan', null);
                            })
                            ->validationMessages([
                                'required' => 'Golongan harus diisi',
                            ])
                            ->columnSpanFull(),
                        Forms\Components\TextInput::make('sub_golongan')
                            ->required()
                            ->maxLength(255)
                            ->rules(['regex:/^[\w\s-]*$/'])
                            ->placeholder('Masukkan sub golongan')
                            ->validationMessages([
                                'required' => 'Sub golongan harus diisi',
                                'regex' => 'Sub golongan hanya boleh berisi huruf, angka, dan spasi',
                                'max' => 'Sub golongan maksimal 255 karakter'
                            ]),
                        Forms\Components\TextInput::make('tarif')
                            ->required()
                            ->numeric()
                            ->minValue(0)
                            ->prefix('Rp')
                            ->placeholder('Masukkan tarif')
                            ->mask('999.999.999')
                            ->inputMode('numeric')
                            ->formatStateUsing(fn($state) => number_format($state, 0, ',', '.'))
                            ->dehydrateStateUsing(fn($state) => str_replace('.', '', $state))
                            ->validationMessages([
                                'required' => 'Tarif harus diisi',
                                'numeric' => 'Tarif harus berupa angka',
                                'min' => 'Tarif tidak boleh kurang dari 0'
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
                Tables\Columns\TextColumn::make('tarif')
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
                Tables\Filters\SelectFilter::make('golongan')
                    ->label('Filter Golongan')
                    ->options(fn() => TarifAbonemen::pluck('golongan', 'golongan')->unique()),
                Tables\Filters\SelectFilter::make('sub_golongan')
                    ->label('Filter Sub Golongan')
                    ->options(fn() => TarifAbonemen::pluck('sub_golongan', 'sub_golongan')->unique()),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make()
                    ->requiresConfirmation(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make()
                        ->requiresConfirmation(),
                ]),
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListTarifAbonemens::route('/'),
            'create' => Pages\CreateTarifAbonemen::route('/create'),
            'edit' => Pages\EditTarifAbonemen::route('/{record}/edit'),
        ];
    }
}
