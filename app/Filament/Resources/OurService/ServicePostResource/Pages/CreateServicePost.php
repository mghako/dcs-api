<?php

namespace App\Filament\Resources\OurService\ServicePostResource\Pages;

use App\Filament\Resources\OurService\ServicePostResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;

class CreateServicePost extends CreateRecord
{
    protected static string $resource = ServicePostResource::class;
}
