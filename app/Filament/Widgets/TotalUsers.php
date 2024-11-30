<?php

namespace App\Filament\Widgets;

use App\Models\Employee;
use App\Models\LibraryMembers;
use App\Models\User;
use Filament\Support\Enums\IconPosition;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class TotalUsers extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('User', User::count())
            ->description('Total user.')
            ->descriptionIcon('heroicon-o-user', IconPosition::Before)
            ->color('success'),
            Stat::make('Anggota Perpustakaan', LibraryMembers::count())
            ->description('Total anggota perpustakaan.')
            ->descriptionIcon('heroicon-o-user-group', IconPosition::Before)
            ->color('primary'),
            Stat::make('Pegawai Perpustakan', Employee::count())
            ->description('Total pegawai perpustakaan.')
            ->descriptionIcon('heroicon-o-users', IconPosition::Before)
            ->color('info')
        ];
    }
}
