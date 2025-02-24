<?php

namespace App\Filament\Widgets;

use App\Models\WaterSource;
use Filament\Widgets\ChartWidget;
use Illuminate\Support\Facades\DB;

class WaterSourcesChart extends ChartWidget
{
    protected static ?string $heading = 'Water Sources by Type';
    protected static ?int $sort = 3;

    protected function getData(): array
    {
        $sources = WaterSource::select('source_type', DB::raw('count(*) as total'))
            ->groupBy('source_type')
            ->get();

        return [
            'datasets' => [
                [
                    'label' => 'Water Sources',
                    'data' => $sources->pluck('total')->toArray(),
                    'backgroundColor' => [
                        '#36A2EB',
                        '#FF6384',
                        '#4BC0C0',
                        '#FF9F40',
                        '#9966FF',
                    ],
                ],
            ],
            'labels' => $sources->pluck('source_type')->toArray(),
        ];
    }

    protected function getType(): string
    {
        return 'pie';
    }
}
