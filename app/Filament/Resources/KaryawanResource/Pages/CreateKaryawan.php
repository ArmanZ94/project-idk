<?php

namespace App\Filament\Resources\KaryawanResource\Pages;

use App\Filament\Resources\KaryawanResource;
use Filament\Actions;
use Filament\Resources\Pages\CreateRecord;
use Illuminate\Database\Eloquent\Model;

class CreateKaryawan extends CreateRecord
{
    protected static string $resource = KaryawanResource::class;

    protected function handleRecordCreation(array $data): Model
    {
        $record =  static::getModel()::create($data);
        $record->gaji()->create($data['gaji']);

        return $record;
    }
}
