<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ContactusResource\Pages;
use App\Filament\Resources\ContactusResource\RelationManagers;
use App\Models\Contactus;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ContactusResource extends Resource
{
    protected static ?string $model = Contactus::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_contact_us')
                    ->label('Nama')
                    ->required(),
                Forms\Components\TextInput::make('email_contact_us')
                    ->label('Email')
                    ->required(),
                Forms\Components\Textarea::make('isi_contact_us')
                    ->label('Pesan')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('nama_contact_us')->label('Nama')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('email_contact_us')->label('Email')->sortable()->searchable(),
                Tables\Columns\TextColumn::make('isi_contact_us')->label('Pesan')->limit(50),
                Tables\Columns\TextColumn::make('created_at')->label('Tanggal')->dateTime()->sortable(),
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
            'index' => Pages\ListContactuses::route('/'),
            'create' => Pages\CreateContactus::route('/create'),
            'edit' => Pages\EditContactus::route('/{record}/edit'),
        ];
    }
}
