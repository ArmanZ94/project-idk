<?php

namespace App\Filament\Resources;

use App\Filament\Resources\BannerResource\Pages;
use App\Filament\Resources\BannerResource\RelationManagers;
use App\Models\Banner;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class BannerResource extends Resource
{
    protected static ?string $model = Banner::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('text1_banner')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('text2_banner')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('text3_banner')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('img_banner')
                    ->image()
                    ->directory('images/banner')
                    ->nullable(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('id')->label('ID')->sortable(),
                Tables\Columns\TextColumn::make('text1_banner')->label('Text 1')->limit(50)->searchable(),
                Tables\Columns\TextColumn::make('text2_banner')->label('Text 2')->limit(50)->searchable(),
                Tables\Columns\TextColumn::make('text3_banner')->label('Text 3')->limit(50)->searchable(),
                Tables\Columns\ImageColumn::make('img_banner'),
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
            'index' => Pages\ListBanners::route('/'),
            'create' => Pages\CreateBanner::route('/create'),
            'edit' => Pages\EditBanner::route('/{record}/edit'),
        ];
    }
}
