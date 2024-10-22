<?php

namespace App\Filament\Resources\KaryawanResource\Pages;

use App\Filament\Resources\KaryawanResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Gaji;
use Illuminate\Database\Eloquent\Model;

class EditKaryawan extends EditRecord
{
    protected static string $resource = KaryawanResource::class;

    protected function handleRecordUpdate(Model $record, array $data): Model
    {
        // Update the main employee record
        $record->update($data);

        // Check if detail exists, then update or create detail record
        if ($record->gaji) {
            // Update the detail record
            $record->gaji()->update($data['gaji']);
        } else {
            // Create a new detail record if it doesn't exist
            $record->gaji()->create($data['gaji']);
        }

        return $record;
    }

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
