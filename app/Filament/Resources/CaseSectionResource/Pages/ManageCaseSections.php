<?php

namespace App\Filament\Resources\CaseSectionResource\Pages;

use App\Filament\Resources\CaseSectionResource;
use Filament\Actions;
use Filament\Resources\Pages\ManageRecords;

class ManageCaseSections extends ManageRecords
{
    protected static string $resource = CaseSectionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
