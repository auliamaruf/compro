<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BranchProfileResource\Pages;
use App\Models\BranchProfile;
use Filament\Resources\Resource;
use Filament\Forms;
use Filament\Tables;

class BranchProfileResource extends Resource
{
    protected static ?string $model = BranchProfile::class;

    protected static ?string $navigationIcon = 'heroicon-o-building-office-2'; // Ikon untuk navigasi

    protected static ?string $navigationLabel = 'Profile Cabang'; // Label navigasi

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('branch_name')
                    ->label('Nama Cabang')
                    ->required(),
                Forms\Components\TextInput::make('branch_head_name')
                    ->label('Nama Kepala Cabang')
                    ->required(),
                Forms\Components\TextInput::make('branch_address')
                    ->label('Alamat')
                    ->required(),
                Forms\Components\TextInput::make('branch_phone')
                    ->label('Telepon')
                    ->nullable(),
                Forms\Components\TextInput::make('branch_email')
                    ->label('Email')
                    ->email()
                    ->nullable(),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('branch_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('branch_head_name')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('branch_address')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('branch_phone')->sortable(),
                Tables\Columns\TextColumn::make('branch_email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Tanggal Diperbarui')->dateTime(),
            ])
            ->filters([
                // Filter bisa ditambahkan sesuai kebutuhan
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListBranchProfiles::route('/'),
            'create' => Pages\CreateBranchProfile::route('/create'),
            'edit' => Pages\EditBranchProfile::route('/{record}/edit'),
        ];
    }
}