<?php

namespace App\Filament\Resources;

use App\Filament\Resources\OperatingHourResource\Pages;
use App\Models\OperatingHour;
use Filament\Forms;
use Filament\Forms\Components\TextInput;
use Filament\Forms\Components\TimePicker;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;

class OperatingHourResource extends Resource
{
    protected static ?string $model = OperatingHour::class;

    protected static ?string $navigationLabel = 'Jam Operasional';

    protected static ?string $navigationIcon = 'heroicon-o-clock';
    protected static ?string $navigationGroup = 'Pengaturan';
    protected static ?int $navigationSort = 3;

    public static function form(Form $form): Form
    {
        return $form->schema([
            Forms\Components\Section::make('Informasi Jam Operasional')
                ->description('Atur jadwal operasional harian')
                ->schema([
                    TextInput::make('day')
                        ->label('Hari')
                        ->required()
                        ->maxLength(255)
                        ->unique(ignoreRecord: true)
                        ->regex('/^[A-Za-z\s]+$/')
                        ->validationMessages([
                            'required' => 'Hari harus diisi',
                            'max' => 'Hari tidak boleh lebih dari :max karakter',
                            'regex' => 'Hari hanya boleh berisi huruf',
                            'unique' => 'Hari ini sudah terdaftar'
                        ]),

                    TimePicker::make('open_time')
                        ->label('Jam Buka')
                        ->default('07:30:00')
                        ->required()
                        ->before('close_time')
                        ->validationMessages([
                            'required' => 'Jam buka harus diisi',
                            'before' => 'Jam buka harus lebih awal dari jam tutup'
                        ]),

                    TimePicker::make('close_time')
                        ->label('Jam Tutup')
                        ->default('15:00:00')
                        ->required()
                        ->after('open_time')
                        ->validationMessages([
                            'required' => 'Jam tutup harus diisi',
                            'after' => 'Jam tutup harus lebih lambat dari jam buka'
                        ]),
                ])->columns(3)
        ]);
    }

    public static function table(Table $table): Table
    {
        return $table->columns([
            TextColumn::make('day')->label('Hari'),
            TextColumn::make('open_time')->label('Jam Buka'),
            TextColumn::make('close_time')->label('Jam Tutup'),
        ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListOperatingHours::route('/'),
            'create' => Pages\CreateOperatingHour::route('/create'),
            'edit' => Pages\EditOperatingHour::route('/{record}/edit'),
        ];
    }
}
