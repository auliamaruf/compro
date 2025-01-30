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
                Forms\Components\Section::make('Company History Details')
                    ->schema([
                        Forms\Components\Group::make([
                            Forms\Components\TextInput::make('year')
                                ->label('Tahun')
                                ->type('number')
                                ->required()
                                ->maxValue(date('Y')),
                            Forms\Components\TextInput::make('title')
                                ->label('Judul')
                                ->required()
                                ->maxLength(255)
                                ->minLength(3)
                                ->unique(ignoreRecord: true)
                                ->validationMessages([
                                    'required' => 'Judul harus diisi',
                                    'max' => 'Judul maksimal 255 karakter',
                                    'min' => 'Judul minimal 3 karakter',
                                    'unique' => 'Judul sudah ada',
                                ]),
                        ])->columns(2),
                        Forms\Components\RichEditor::make('description')
                            ->label('Deskripsi')
                            ->required()
                            ->toolbarButtons([
                                'bold',
                                'italic',
                                'underline',
                                'strike',
                                'bulletList',
                                'orderedList',
                                'link',
                                'undo',
                                'redo',
                            ])
                            ->maxLength(65535)
                            ->validationMessages([
                                'required' => 'Deskripsi harus diisi',
                                'max' => 'Deskripsi terlalu panjang',
                            ])
                    ])
                    ->columns(1)
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
