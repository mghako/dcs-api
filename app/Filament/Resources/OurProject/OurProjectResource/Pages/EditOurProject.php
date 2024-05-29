<?php

namespace App\Filament\Resources\OurProject\OurProjectResource\Pages;

use App\Filament\Resources\OurProject\OurProjectResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditOurProject extends EditRecord
{
    protected static string $resource = OurProjectResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
