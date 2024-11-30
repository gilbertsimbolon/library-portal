<?php

namespace App\Filament\Resources;

use App\Filament\Resources\VisiMisiResource\Pages;
use App\Filament\Resources\VisiMisiResource\RelationManagers;
use App\Models\VisiMisi;
use Filament\Forms;
use Filament\Forms\Components\Textarea;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use function Laravel\Prompts\textarea;

use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class VisiMisiResource extends Resource
{
    protected static ?string $model = VisiMisi::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Textarea::make('visi')
                ->label('Visi')
                ->required()
                ->rows(5),
                TextArea::make('misi')
                ->label('Misi')
                ->required()
                ->rows(5)
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('visi')
                ->label('Visi')
                ->limit(50),
                TextColumn::make('misi')
                ->label('Misi')
                ->limit(50),
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
            'index' => Pages\ListVisiMisis::route('/'),
            'create' => Pages\CreateVisiMisi::route('/create'),
            'edit' => Pages\EditVisiMisi::route('/{record}/edit'),
        ];
    }
}
