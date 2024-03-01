<?php

namespace App\Filament\Widgets;

use App\Models\User;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class UsersCount extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make("Total Users", User::all()->count()),
            Stat::make("SignUps of the last month", User::all()->where('created_at', '>=', now()->subMonth())->count()),
        ];
    }
}
