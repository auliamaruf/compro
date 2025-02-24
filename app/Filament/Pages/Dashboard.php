<?php

namespace App\Filament\Pages;

use App\Filament\Widgets\StatsOverview;
use App\Filament\Widgets\LatestPosts;
use App\Filament\Widgets\WaterSourcesChart;
use Filament\Pages\Dashboard as BaseDashboard;

class Dashboard extends BaseDashboard
{
    protected function getHeaderWidgets(): array
    {
        return [
            StatsOverview::class,
        ];
    }

    public function getColumns(): int
    {
        return 2;
    }

    public function getWidgets(): array  // Changed from protected to public
    {
        return [
            StatsOverview::class,
            LatestPosts::class,
            WaterSourcesChart::class,
        ];
    }
}
