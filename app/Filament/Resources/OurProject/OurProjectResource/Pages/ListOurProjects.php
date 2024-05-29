<?php

namespace App\Filament\Resources\OurProject\OurProjectResource\Pages;

use App\Filament\Resources\OurProject\OurProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListOurProjects extends ListRecords
{
    protected static string $resource = OurProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
