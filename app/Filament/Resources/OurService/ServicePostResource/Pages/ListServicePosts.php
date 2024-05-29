<?php

namespace App\Filament\Resources\OurService\ServicePostResource\Pages;

use App\Filament\Resources\OurService\ServicePostResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListServicePosts extends ListRecords
{
    protected static string $resource = ServicePostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
