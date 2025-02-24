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
    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?string $navigationIcon = 'heroicon-o-building-office-2';
    protected static ?string $navigationLabel = 'Profil Cabang';
    protected static ?int $navigationSort = 3;
    protected static ?string $label = 'Profil Cabang';
    protected static ?string $pluralLabel = 'Profil Cabang';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Utama')
                    ->schema([
                        Forms\Components\TextInput::make('branch_name')
                            ->label('Nama Cabang')
                            ->placeholder('Masukkan nama cabang')
                            ->required()
                            ->maxLength(255),

                        Forms\Components\TextInput::make('branch_head_name')
                            ->label('Nama Kepala Cabang')
                            ->placeholder('Masukkan nama kepala cabang')
                            ->required()
                            ->maxLength(255),
                    ])->columns(2),

                Forms\Components\Section::make('Kontak dan Lokasi')
                    ->schema([
                        Forms\Components\Textarea::make('branch_address')
                            ->label('Alamat')
                            ->placeholder('Masukkan alamat lengkap cabang')
                            ->required()
                            ->rows(3)
                            ->maxLength(500),

                        Forms\Components\TextInput::make('branch_phone')
                            ->label('Nomor Telepon')
                            ->placeholder('Contoh: 0341-123456')
                            ->tel()
                            ->telRegex('/^[0-9\-\+\(\)\/\s]*$/')
                            ->maxLength(20),

                        Forms\Components\TextInput::make('branch_email')
                            ->label('Email')
                            ->placeholder('contoh@email.com')
                            ->email()
                            ->maxLength(255),
                    ]),

                Forms\Components\Section::make('Informasi Tambahan')
                    ->schema([
                        Forms\Components\Textarea::make('description')
                            ->label('Deskripsi')
                            ->placeholder('Deskripsi singkat tentang cabang')
                            ->rows(4)
                            ->maxLength(1000),
                    ]),

                Forms\Components\Section::make('Link Google Maps')
                    ->schema([
                        Forms\Components\TextInput::make('google_maps_link')
                            ->label('Link Google Maps')
                            ->placeholder('Masukkan link Google Maps')
                            ->url()
                            ->maxLength(1000)
                            ->helperText('Contoh: https://maps.google.com/...'),
                    ]),
            ]);
    }

    public static function table(Tables\Table $table): Tables\Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('branch_name')
                    ->label('Nama Cabang')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('branch_head_name')
                    ->label('Kepala Cabang')
                    ->sortable()
                    ->searchable()
                    ->limit(50),

                Tables\Columns\TextColumn::make('branch_address')
                    ->label('Alamat')
                    ->sortable()
                    ->searchable()
                    ->limit(100)
                    ->wrap(),

                Tables\Columns\TextColumn::make('branch_phone')
                    ->label('Telepon')
                    ->sortable()
                    ->searchable()
                    ->formatStateUsing(fn(string $state): string =>
                    str_replace([' ', '-'], '', $state))
                    ->copyable(),

                Tables\Columns\TextColumn::make('branch_email')
                    ->label('Email')
                    ->sortable()
                    ->searchable()
                    ->copyable()
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('google_maps_link')
                    ->label('Maps')
                    ->sortable()
                    ->searchable()
                    ->copyable()
                    ->openUrlInNewTab(),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Terakhir Diperbarui')
                    ->dateTime('d M Y H:i')
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
            ])
            ->actions([
                Tables\Actions\ViewAction::make(),
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
            'view' => Pages\ViewBranchProfile::route('/{record}'),
        ];
    }
}
