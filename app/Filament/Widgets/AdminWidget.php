<?php

namespace App\Filament\Widgets;

use App\Models\Blog\Post;
use App\Models\User;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Filament\Widgets\Widget;

class AdminWidget extends Widget
{
    protected static string $view = 'filament.widgets.admin-widget';

    protected function getStats(): array
    {
        return [
            Stat::make('Users', User::count())
            ->description('Total users')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
            Stat::make('Posts', Post::count())
            ->description('Total posts')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success')
            ,
            Stat::make('Post views', 0)
            ->description('Total views')
            ->descriptionIcon('heroicon-m-arrow-trending-up')
            ->chart([7, 2, 10, 3, 15, 4, 17])
            ->color('success'),
        ];
    }

    // public static function canView(): bool
    // {
    //     return auth()->user()->is_super_admin();
    // }
}
