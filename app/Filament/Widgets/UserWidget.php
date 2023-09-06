<?php

namespace App\Filament\Widgets;

use Filament\Widgets\ChartWidget;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UserWidget extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            // ChartWidget:
            Stat::make('Your posts', auth()->user()->posts()->count())
            ->description('Total posts you created')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success')
            ,
            Stat::make('Post views', 0)
            ->description('Total views gotten from your posts')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }

    public static function canView(): bool
    {
        return auth()->user()->is_admin();
    }


}
