<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget as BaseWidget;

class LatestPosts extends BaseWidget
{
    protected static ?int $sort = 2;
    protected int|string|array $columnSpan = 'full';

    public function table(Table $table): Table
    {
        return $table
            ->query(
                Post::query()
                    ->latest()
                    ->limit(5)
            )
            ->columns([
                TextColumn::make('title')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('category.name')
                    ->searchable()
                    ->sortable(),
                TextColumn::make('status')
                    ->badge()
                    ->color(fn(string $state): string => match ($state) {
                        'published' => 'success',
                        'draft' => 'gray',
                        'scheduled' => 'warning',
                    }),
                TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable(),
            ]);
    }
}
