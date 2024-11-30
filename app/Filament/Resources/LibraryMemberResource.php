<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LibraryMemberResource\Pages;
use App\Filament\Resources\LibraryMemberResource\RelationManagers;
use App\Mail\EmailConfirmation;
use App\Models\LibraryMembers;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Notifications\Notification;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Mail;

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
                Action::make('kirim_email')
                ->label('Kirim Email')
                ->action(function ($record) {
                // Kirim email dengan data record
                Mail::to($record->email_edukasi)->send(new EmailConfirmation([
                    'nama' => $record->nama,
                    'nim' => $record->nim, 
                    'email_edukasi' => $record->email_edukasi,
                    'no_hp' => $record->no_hp,
                    'no_wa' => $record->no_wa,
                    'fakultas' => $record->fakultas,
                    'program_studi' => $record->program_studi,
                ]));

                    return Notification::make()
                        ->title('Email Terkirim')
                        ->success()
                        ->send();
                })
                ->requiresConfirmation(),
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
