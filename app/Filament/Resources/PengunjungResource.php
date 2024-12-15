<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PengunjungResource\Pages;
use App\Models\Pengunjung;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class PengunjungResource extends Resource
{
    protected static ?string $model = Pengunjung::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama')
                    ->required()
                    ->label('Nama Pengunjung'),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->unique()
                    ->required()
                    ->label('Email'),
                Forms\Components\TextInput::make('no_hp')
                    ->required()
                    ->label('Nomor HP'),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama')->label('Nama Pengunjung'),
                Tables\Columns\TextColumn::make('email')->label('Email'),
                Tables\Columns\TextColumn::make('no_hp')->label('Nomor HP'),
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
            ]);
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPengunjungs::route('/'),
            'create' => Pages\CreatePengunjung::route('/create'),
            'edit' => Pages\EditPengunjung::route('/{record}/edit'),
        ];
    }
}