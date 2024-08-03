<?php

namespace App\Filament\Resources\PostResource\Widgets;

use App\Models\Post;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;

class PostOverview extends BaseWidget
{
    protected function getStats(): array
    {
        return [
            Stat::make('Postingan', Post::where('kategori','Kegiatan Umum/Sosial')->count())
            ->description('Kegiatan Umum/Sosial'),
            Stat::make('Postingan', Post::where('kategori','Kajian')->count())
            ->description('Kajian'),
            Stat::make('Postingan', Post::where('kategori','Pengajian')->count())
            ->description('Pengajian'),
            Stat::make('Postingan', Post::where('kategori','Pengumuman')->count())
            ->description('Pengumuman'),
            Stat::make('Postingan', Post::where('kategori','Jadwal Event/Kegiatan')->count())
            ->description('Jadwal Event/Kegiatan'),
            Stat::make('Postingan', Post::where('kategori','Lainnya')->count())
            ->description('Lainnya'),
        ];
    }
}
