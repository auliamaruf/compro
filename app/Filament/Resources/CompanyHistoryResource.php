<?php

namespace App\Filament\Resources;

use App\Filament\Resources\CompanyHistoryResource\Pages;
use App\Models\CompanyHistory;
use Filament\Forms;
use Filament\Resources\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Filament\Widgets\Timeline;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class CompanyHistoryResource extends Resource
{
    protected static ?string $model = CompanyHistory::class;

    // Mengubah grup navigasi menjadi 'Pengaturan'
    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?string $navigationLabel = 'Sejarah Perusahaan';
    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?int $navigationSort = 1;

    protected static ?string $label = 'Company History';
    protected static ?string $pluralLabel = 'Company Histories';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->label('Judul')
                    ->required(),
                Forms\Components\Textarea::make('description')
                    ->label('Deskripsi')
                    ->required(),
                Forms\Components\TextInput::make('year')
                    ->label('Tahun')
                    ->type('number')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('year')
                    ->label('Tahun')
                    ->sortable()
                    ->searchable(),
                Tables\Columns\TextColumn::make('title')
                    ->label('Judul'),
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
            'index' => Pages\ListCompanyHistories::route('/'),
            'create' => Pages\CreateCompanyHistory::route('/create'),
            'edit' => Pages\EditCompanyHistory::route('/{record}/edit'),
        ];
    }
}