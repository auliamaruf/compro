<?php

namespace App\Filament\Widgets;

use App\Models\Post;
use App\Models\Category;
use App\Models\BranchProfile;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class StatsOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Total Posts', Post::count())
                ->description('Total published articles')
                ->descriptionIcon('heroicon-m-document-text')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('success'),

            Stat::make('Total Categories', Category::count())
                ->description('Content categories')
                ->descriptionIcon('heroicon-m-rectangle-stack')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('warning'),

            Stat::make('Branch Offices', BranchProfile::count())
                ->description('Active branches')
                ->descriptionIcon('heroicon-m-building-office')
                ->chart([7, 2, 10, 3, 15, 4, 17])
                ->color('primary'),
        ];
    }
}
