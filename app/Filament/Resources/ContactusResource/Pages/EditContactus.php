<?php

namespace App\Filament\Resources\ContactusResource\Pages;

use App\Filament\Resources\ContactusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditContactus extends EditRecord
{
    protected static string $resource = ContactusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
