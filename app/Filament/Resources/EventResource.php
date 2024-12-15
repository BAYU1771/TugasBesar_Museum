<?php

namespace App\Filament\Resources;

use App\Filament\Resources\EventResource\Pages;
use App\Models\Event;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;

class EventResource extends Resource
{
    protected static ?string $model = Event::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('nama_event')
                    ->required()
                    ->label('Nama Event'),
                Forms\Components\Textarea::make('deskripsi')
                    ->label('Deskripsi')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_mulai')
                    ->label('Tanggal Mulai')
                    ->required(),
                Forms\Components\DatePicker::make('tanggal_selesai')
                    ->label('Tanggal Selesai')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_event')->label('Nama Event'),
                Tables\Columns\TextColumn::make('deskripsi')->label('Deskripsi'),
                Tables\Columns\TextColumn::make('tanggal_mulai')->label('Tanggal Mulai'),
                Tables\Columns\TextColumn::make('tanggal_selesai')->label('Tanggal Selesai'),
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
            'index' => Pages\ListEvents::route('/'),
            'create' => Pages\CreateEvent::route('/create'),
            'edit' => Pages\EditEvent::route('/{record}/edit'),
        ];
    }
}