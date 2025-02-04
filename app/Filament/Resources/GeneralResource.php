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
    protected static ?int $navigationSort = 4;

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Section::make('Informasi Perusahaan')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\FileUpload::make('logo')
                                    ->label('Logo Perusahaan')
                                    ->image()
                                    ->directory('company-logos')
                                    ->maxSize(2048)
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('1:1')
                                    ->imageResizeTargetWidth('300')
                                    ->imageResizeTargetHeight('300')
                                    ->helperText('Format: JPG, PNG. Maksimal 2MB')
                                    ->validationMessages([
                                        'image' => 'File harus berupa gambar',
                                        'max' => 'Ukuran file maksimal 2MB',
                                    ]),
                                Forms\Components\TextInput::make('nama_perusahaan')
                                    ->label('Nama Perusahaan')
                                    ->required()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'required' => 'Nama perusahaan wajib diisi',
                                        'max' => 'Nama perusahaan maksimal 255 karakter',
                                    ]),
                            ]),
                        Forms\Components\Textarea::make('alamat')
                            ->label('Alamat')
                            ->required()
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Alamat wajib diisi',
                            ]),
                    ]),

                Forms\Components\Section::make('Kontak')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('telepon')
                                    ->label('Telepon')
                                    ->tel()
                                    ->required()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'required' => 'Nomor telepon wajib diisi',
                                        'max' => 'Nomor telepon maksimal 255 karakter',
                                    ]),
                                Forms\Components\TextInput::make('whatsapp')
                                    ->label('Whatsapp')
                                    ->tel()
                                    ->required()
                                    ->placeholder('Contoh: 6281234567890')
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'required' => 'Nomor telepon wajib diisi',
                                        'max' => 'Nomor telepon maksimal 15 karakter',
                                    ]),
                                Forms\Components\TextInput::make('email')
                                    ->label('Email')
                                    ->email()
                                    ->required()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'required' => 'Email wajib diisi',
                                        'email' => 'Format email tidak valid',
                                        'max' => 'Email maksimal 255 karakter',
                                    ]),
                            ]),
                    ]),

                Forms\Components\Section::make('Media Sosial')
                    ->schema([
                        Forms\Components\Grid::make(2)
                            ->schema([
                                Forms\Components\TextInput::make('sosial_media_1')
                                    ->label('Instagram')
                                    ->url()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'url' => 'Format URL tidak valid',
                                        'max' => 'URL maksimal 255 karakter',
                                    ]),
                                Forms\Components\TextInput::make('sosial_media_2')
                                    ->label('Twitter')
                                    ->url()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'url' => 'Format URL tidak valid',
                                        'max' => 'URL maksimal 255 karakter',
                                    ]),
                                Forms\Components\TextInput::make('sosial_media_3')
                                    ->label('Facebook')
                                    ->url()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'url' => 'Format URL tidak valid',
                                        'max' => 'URL maksimal 255 karakter',
                                    ]),
                                Forms\Components\TextInput::make('sosial_media_4')
                                    ->label('Youtube')
                                    ->url()
                                    ->maxLength(255)
                                    ->validationMessages([
                                        'url' => 'Format URL tidak valid',
                                        'max' => 'URL maksimal 255 karakter',
                                    ]),
                            ]),
                    ]),

                Forms\Components\Section::make('Profil Perusahaan')
                    ->schema([
                        Forms\Components\Textarea::make('deskripsi')
                            ->label('Deskripsi')
                            ->required()
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Deskripsi wajib diisi',
                            ]),
                        Forms\Components\Textarea::make('visi')
                            ->label('Visi')
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Visi wajib diisi',
                            ]),
                        Forms\Components\Textarea::make('misi')
                            ->label('Misi')
                            ->columnSpanFull()
                            ->validationMessages([
                                'required' => 'Misi wajib diisi',
                            ]),
                    ]),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // Company Information
                Tables\Columns\ImageColumn::make('logo')
                    ->label('Logo Perusahaan')
                    ->square(),
                Tables\Columns\TextColumn::make('nama_perusahaan')
                    ->label('Nama Perusahaan')
                    ->searchable()
                    ->sortable(),

                // Contact Information
                Tables\Columns\TextColumn::make('telepon')
                    ->label('Telepon')
                    ->searchable(),
                Tables\Columns\TextColumn::make('whatsapp')
                    ->label('Whatsapp')
                    ->searchable(),
                Tables\Columns\TextColumn::make('email')
                    ->label('Email')
                    ->searchable(),

                // Social Media
                Tables\Columns\TextColumn::make('sosial_media_1')
                    ->label('Instagram')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_2')
                    ->label('Twitter')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_3')
                    ->label('Facebook')
                    ->searchable(),
                Tables\Columns\TextColumn::make('sosial_media_4')
                    ->label('Youtube')
                    ->searchable(),

                // Timestamps
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
                Tables\Filters\TernaryFilter::make('has_logo')
                    ->label('Memiliki Logo')
                    ->placeholder('Semua')
                    ->trueLabel('Dengan Logo')
                    ->falseLabel('Tanpa Logo')
                    ->queries(
                        true: fn(Builder $query) => $query->whereNotNull('logo'),
                        false: fn(Builder $query) => $query->whereNull('logo'),
                    ),
                Tables\Filters\SelectFilter::make('sosial_media')
                    ->label('Social Media')
                    ->multiple()
                    ->options([
                        'instagram' => 'Instagram',
                        'twitter' => 'Twitter',
                        'facebook' => 'Facebook',
                        'youtube' => 'Youtube',
                    ])
                    ->query(function (Builder $query, array $data) {
                        return $query->when(
                            $data['values'],
                            fn(Builder $query) => $query->whereNotNull('sosial_media_1')
                                ->orWhereNotNull('sosial_media_2')
                                ->orWhereNotNull('sosial_media_3')
                                ->orWhereNotNull('sosial_media_4')
                        );
                    }),
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
