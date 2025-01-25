<?php

namespace App\Filament\Resources;

use App\Filament\Resources\GeneralResource\Pages;
use App\Models\General;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;

class GeneralResource extends Resource
{
    protected static ?string $model = General::class;

    protected static ?string $navigationIcon = 'heroicon-o-adjustments-horizontal';
    protected static ?string $navigationLabel = 'General';
    protected static ?string $navigationGroup = 'Pengaturan';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\FileUpload::make('logo')
                            ->label('Logo Perusahaan')
                            ->image()
                            ->directory('company-logos')
                            ->maxSize(2048),
                        Forms\Components\TextInput::make('nama_perusahaan')
                            ->label('Nama Perusahaan')
                            ->required()
                            ->maxLength(255),
                    ]),
                Forms\Components\Textarea::make('alamat')
                    ->label('Alamat')
                    ->columnSpanFull(),
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('telepon')
                            ->label('Telepon')
                            ->tel()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('email')
                            ->label('Email')
                            ->email()
                            ->maxLength(255),
                    ]),
                Forms\Components\Grid::make(2)
                    ->schema([
                        Forms\Components\TextInput::make('sosial_media_1')
                            ->label('Sosial Media 1')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('sosial_media_2')
                            ->label('Sosial Media 2')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('sosial_media_3')
                            ->label('Sosial Media 3')
                            ->url()
                            ->maxLength(255),
                        Forms\Components\TextInput::make('sosial_media_4')
                            ->label('Sosial Media 4')
                            ->url()
                            ->maxLength(255),
                    ]),
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('visi')
                    ->label('Visi')
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('misi')
                    ->label('Misi')
                    ->columnSpanFull(),
                Forms\Components\TextInput::make('jam_operasional')
                    ->label('Jam Operasional')
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo Perusahaan')
                    ->square(),
                Tables\Columns\TextColumn::make('nama_perusahaan')
                    ->label('Nama Perusahaan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_1')
                    ->label('Sosial Media 1')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_2')
                    ->label('Sosial Media 2')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_3')
                    ->label('Sosial Media 3')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_4')
                    ->label('Sosial Media 4')
                    ->searchable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->label('Dibuat Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Diperbarui Pada')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->filters([
                // Tambahkan filter jika diperlukan
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            // Tambahkan relasi jika diperlukan
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListGenerals::route('/'),
            'create' => Pages\CreateGeneral::route('/create'),
            'edit' => Pages\EditGeneral::route('/{record}/edit'),
        ];
    }
}