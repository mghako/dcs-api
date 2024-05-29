<?php

namespace App\Filament\Resources\OurService\ServicePostResource\Pages;

use App\Filament\Resources\OurService\ServicePostResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditServicePost extends EditRecord
{
    protected static string $resource = ServicePostResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
            Actions\ForceDeleteAction::make(),
            Actions\RestoreAction::make(),
        ];
    }
}
