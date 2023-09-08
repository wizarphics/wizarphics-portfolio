<?php
namespace App\Filament\Resources\TestimonialResource\Widgets;

use App\Filament\Resources\TestimonialResource\Pages\ManageTestimonials;
use Filament\Widgets\Concerns\InteractsWithPageTable;
use Filament\Widgets\StatsOverviewWidget as BaseWidget;
use Filament\Widgets\StatsOverviewWidget\Stat;
use Illuminate\Support\Facades\DB;

class TestimonialOverview extends BaseWidget
{
    use InteractsWithPageTable;

    protected function getTablePage(): string
    {
        return ManageTestimonials::class;
    }
    protected function getStats(): array
    {
        return [
            Stat::make('Total Testimonies',$this->getPageTableQuery()->count()),
            Stat::make('Average Rating',$this->getPageTableQuery()->select(DB::raw('ROUND(AVG(rating), 1) as aggregate'))->groupBy('testimonials.id')->first()->aggregate),
            Stat::make('Approved Testimonies',$this->getPageTableQuery()->where('is_approved', '=', true)->count()),
        ];
    }
}
