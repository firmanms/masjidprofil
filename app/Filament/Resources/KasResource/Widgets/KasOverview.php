<?php

namespace App\Filament\Resources\KasResource\Widgets;

use App\Models\Kas;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class KasOverview extends BaseWidget
{
    protected function getStats(): array
    {
        $uangmasuk  = Kas::sum('uang_masuk');
        $uangkeluar = Kas::sum('uang_keluar');
        $saldo      = $uangmasuk-$uangkeluar;
        return [
            Stat::make('Kas Masuk', 'Rp ' . number_format($uangmasuk,0,',','.'))
            ->color('success'),
            Stat::make('Kas Keluar', 'Rp ' . number_format($uangkeluar,0,',','.'))
            ->color('danger'),
            Stat::make('Saldo Kas', 'Rp ' . number_format($saldo,0,',','.') )
            ->color('info'),
        ];
    }
}
