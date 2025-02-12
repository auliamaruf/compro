<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PostResource\Pages;
use App\Filament\Resources\PostResource\RelationManagers;
use App\Models\Category;
use App\Models\Post;
use BezhanSalleh\FilamentShield\Contracts\HasShieldPermissions;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;

class PostResource extends Resource implements HasShieldPermissions
{
    protected static ?string $model = Post::class;

    protected static ?string $navigationIcon = 'heroicon-o-pencil-square';
    public static function getPermissionPrefixes(): array
    {
        return [
            'view',
            'view_any',
            'create',
            'update',
            'delete',
            'delete_any',
            'publish'
        ];
    }

    public static function form(Forms\Form $form): Forms\Form
    {
        return $form
            ->schema([
                Forms\Components\Grid::make()
                    ->schema([
                        Forms\Components\Section::make('Post Details')
                            ->description('Enter the main details of the post')
                            ->schema([
                                Forms\Components\TextInput::make('title')
                                    ->label('Judul Posting')
                                    ->required()
                                    ->maxLength(255)
                                    ->unique(ignorable: fn($record) => $record)
                                    ->live(onBlur: true)
                                    ->afterStateUpdated(fn($state, Forms\Set $set) =>
                                    $set('slug', Str::slug($state)))
                                    ->validationMessages([
                                        'required' => 'Judul posting wajib diisi',
                                        'unique' => 'Judul posting sudah ada',
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\Select::make('category_id')
                                    ->label('Kategori')
                                    ->options(Category::all()->pluck('name', 'id'))
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->validationMessages([
                                        'required' => 'Kategori wajib dipilih',
                                    ]),

                                Forms\Components\Select::make('author_id')
                                    ->label('Author')
                                    ->options(\App\Models\User::all()->pluck('name', 'id'))
                                    ->required()
                                    ->searchable()
                                    ->preload()
                                    ->validationMessages([
                                        'required' => 'Author wajib dipilih',
                                    ]),

                                Forms\Components\Radio::make('status')
                                    ->label('Status')
                                    ->options([
                                        'draft' => 'Draft',
                                        'published' => 'Publikasikan'
                                    ])
                                    ->default('draft')
                                    ->required()
                                    ->inline()
                                    ->validationMessages([
                                        'required' => 'Status wajib dipilih',
                                    ]),
                            ])
                            ->columns(2),

                        Forms\Components\Section::make('Content')
                            ->description('Add the post content and image')
                            ->schema([
                                Forms\Components\RichEditor::make('body')
                                    ->label('Konten')
                                    ->required()
                                    ->toolbarButtons([
                                        'bold',
                                        'italic',
                                        'underline',
                                        'link',
                                        'bulletList',
                                        'orderedList',
                                        'h2',
                                        'h3',
                                    ])
                                    ->validationMessages([
                                        'required' => 'Konten wajib diisi',
                                    ])
                                    ->columnSpanFull(),

                                Forms\Components\FileUpload::make('image')
                                    ->label('Gambar')
                                    ->image()
                                    ->nullable()
                                    ->disk('public')
                                    ->directory('posts/images')
                                    ->maxSize(5120)
                                    ->imageResizeMode('cover')
                                    ->imageCropAspectRatio('16:9')
                                    ->imageResizeTargetWidth('1920')
                                    ->imageResizeTargetHeight('1080')
                                    ->validationMessages([
                                        'image' => 'File harus berupa gambar',
                                        'max' => 'Ukuran file maksimal 5MB',
                                    ])
                                    ->columnSpanFull(),
                            ]),
                    ])
                    ->columns(1),
            ]);
    }


    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->sortable()
                    ->searchable(),

                Tables\Columns\TextColumn::make('category.name')
                    ->label('Kategori')
                    ->sortable(),

                Tables\Columns\TextColumn::make('author.name')
                    ->label('Author')
                    ->sortable(),

                Tables\Columns\ImageColumn::make('image')
                    ->label('Foto')
                    ->disk('public')
                    ->url(fn(Post $record) => $record->image ? Storage::url($record->image) : null),

                Tables\Columns\TextColumn::make('created_at')
                    ->label('Tanggal Dibuat')
                    ->dateTime(),

                Tables\Columns\TextColumn::make('updated_at')
                    ->label('Tanggal Diperbarui')
                    ->dateTime(),

                Tables\Columns\TextColumn::make('deleted_at')
                    ->label('Tanggal Dihapus')
                    ->dateTime(),

                Tables\Columns\TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'draft' => 'gray',
                        'scheduled' => 'warning',
                        'published' => 'success',
                    }),
                Tables\Columns\TextColumn::make('scheduled_publish_at')
                    ->label('Jadwal Publikasi')
                    ->dateTime()
                    ->sortable(),
            ])
            ->filters([
                //
            ])
            ->filters([
                Tables\Filters\SelectFilter::make('category')
                    ->relationship('category', 'name')
                    ->label('Filter by Category')
                    ->multiple()
                    ->preload(),
                Tables\Filters\SelectFilter::make('author')
                    ->relationship('author', 'name')
                    ->label('Filter by Author')
                    ->multiple()
                    ->preload(),
                Tables\Filters\TrashedFilter::make(),
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
