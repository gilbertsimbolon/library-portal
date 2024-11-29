<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryMemberResource\Pages;
use App\Filament\Resources\LibraryMemberResource\RelationManagers;
use App\Models\LibraryMembers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class LibraryMemberResource extends Resource
{
    protected static ?string $model = LibraryMembers::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('nama'),
                TextColumn::make('nim'),
                TextColumn::make('email_edukasi'),
                TextColumn::make('no_hp'),
                TextColumn::make('no_wa'),
                TextColumn::make('fakultas'),
                TextColumn::make('program_studi'),
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
            'index' => Pages\ListLibraryMembers::route('/'),
            'create' => Pages\CreateLibraryMember::route('/create'),
            'edit' => Pages\EditLibraryMember::route('/{record}/edit'),
        ];
    }
}
