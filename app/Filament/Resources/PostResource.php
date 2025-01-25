<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Post;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use App\Models\Category;

class PostResource extends Resource
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title') // Judul posting
                    ->label('Judul Posting')
                    ->required(),
                Forms\Components\Select::make('category_id') // Pilih kategori
                    ->label('Kategori')
                    ->options(Category::all()->pluck('name', 'id'))
                    ->required(),
                Forms\Components\RichEditor::make('body') // Konten artikel
                    ->label('Konten')
                    ->required(),
                Forms\Components\FileUpload::make('image') // Upload gambar
                    ->label('Gambar')
                    ->image() // Hanya menerima gambar
                    ->nullable() // Foto bersifat opsional
                    ->disk('public') // Tentukan disk penyimpanan (public storage)
                    ->directory('posts/images') // Direktori untuk gambar
                    ->maxSize(5120), // Ukuran maksimal 5MB
                Forms\Components\Select::make('author_id') // Pilih author
                    ->label('Author')
                    ->options(\App\Models\User::all()->pluck('name', 'id'))
                    ->required(),
            ]);
    }
    

    public static function table(Table $table): Table
    {
        return $table
        ->columns([
                Tables\Columns\TextColumn::make('title')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('category.name')->label('Kategori')->sortable(),
                Tables\Columns\TextColumn::make('author.name')->label('Author')->sortable(),
                Tables\Columns\ImageColumn::make('image') // Menampilkan gambar
                    ->label('Foto')
                    ->disk('public')
                    ->url(fn (Post $record) => $record->image ? Storage::url($record->image) : null), // Menampilkan URL gambar
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal Dibuat')->dateTime(),
                Tables\Columns\TextColumn::make('updated_at')->label('Tanggal Diperbarui')->dateTime(),
                Tables\Columns\TextColumn::make('deleted_at')->label('Tanggal Dihapus')->dateTime(),
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
            'index' => Pages\ListPosts::route('/'),
            'create' => Pages\CreatePost::route('/create'),
            'edit' => Pages\EditPost::route('/{record}/edit'),
        ];
    }
}
