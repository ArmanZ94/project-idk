<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ArtikelResource\Pages;
use App\Filament\Resources\ArtikelResource\RelationManagers;
use App\Models\Artikel;
use App\Models\User;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;

class ArtikelResource extends Resource
{
    protected static ?string $model = Artikel::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?string $pluralModelLabel = 'Articles';
    //untuk mengubah nama label kiri
    protected static ?string $navigationLabel = 'Articles';
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('judul_artikel')
                    ->required()
                    ->maxLength(250),
                Forms\Components\Textarea::make('isi_artikel')
                    ->required(),
                Forms\Components\FileUpload::make('img_artikel')
                    ->image()
                    ->directory('images/artikel') // Store in the specified folder
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('user.name')->label('Author | ID')->sortable()->searchable()
                ->formatStateUsing(function ($record) {
                    // $state di sini adalah nama user, dan $record adalah instance artikel
                    return Str::limit($record->user->name,5) . " | " . $record->user->id;
                }),
                Tables\Columns\TextColumn::make('judul_artikel')->limit(24)->sortable()->searchable(),
                Tables\Columns\TextColumn::make('isi_artikel')->limit(50)->searchable()->html(),
                Tables\Columns\ImageColumn::make('img_artikel'),
                Tables\Columns\TextColumn::make('created_at')->label('Created')->sortable()->dateTime(),
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
            'index' => Pages\ListArtikels::route('/'),
            'create' => Pages\CreateArtikel::route('/create'),
            'edit' => Pages\EditArtikel::route('/{record}/edit'),
        ];
    }
}
