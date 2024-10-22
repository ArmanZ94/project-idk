<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KaryawanResource\Pages;
use App\Filament\Resources\KaryawanResource\RelationManagers;
use App\Models\Karyawan;
use App\Models\Gaji;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;


class KaryawanResource extends Resource
{
    protected static ?string $model = Karyawan::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                ->required()
                ->maxLength(50),
            Forms\Components\Select::make('jabatan_id')
                ->label('Jabatan')
                ->relationship('jabatan', 'nama_jabatan') // Relasi ke Jabatan
                ->required(),
            Forms\Components\Select::make('ruangan_id')
                ->label('Ruangan')
                ->relationship('ruangan', 'nama_ruangan') // Relasi ke Ruangan
                ->required(),
            Forms\Components\TextInput::make('gaji.gaji_pokok')
                ->label('Gaji Pokok')
                ->required()
                ->integer(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('nama')->label('Nama Karyawan')->sortable()->limit(50)->searchable(),
                Tables\Columns\TextColumn::make('jabatan.nama_jabatan')->label('Jabatan')->sortable()->searchable(), // Relasi ke Jabatan
                Tables\Columns\TextColumn::make('ruangan.nama_ruangan')->label('Ruangan')->sortable()->searchable(), // Relasi ke Ruangan
                Tables\Columns\TextColumn::make('gaji.gaji_pokok')->label('Gaji Pokok')->limit(12)->sortable()->searchable(), // Relasi ke Gaji
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListKaryawans::route('/'),
            'create' => Pages\CreateKaryawan::route('/create'),
            'edit' => Pages\EditKaryawan::route('/{record}/edit'),
        ];
    }
}
