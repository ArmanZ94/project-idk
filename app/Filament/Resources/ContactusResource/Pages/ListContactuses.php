<?php

namespace App\Filament\Resources\ContactusResource\Pages;

use App\Filament\Resources\ContactusResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListContactuses extends ListRecords
{
    protected static string $resource = ContactusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\CreateAction::make(),
        ];
    }
}
