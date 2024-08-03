<?php

namespace App\Filament\Resources;

use App\Filament\Resources\KasResource\Pages;
use App\Filament\Resources\KasResource\RelationManagers;
use App\Models\Kas;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class KasResource extends Resource
{
    protected static ?string $model = Kas::class;

    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?int $navigationSort = 8;

    protected static ?string $navigationLabel = 'Kas';

    protected static ?string $modelLabel = 'Kas';

    protected static ?string $pluralLabel = 'Kas';


    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::user()->id),
                Forms\Components\DatePicker::make('tanggal')
                    ->required(),
                Forms\Components\TextInput::make('kegiatan')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('uang_masuk')
                    ->required()
                    ->numeric(),
                Forms\Components\TextInput::make('uang_keluar')
                    ->required()
                    ->numeric(),
                Forms\Components\Textarea::make('detail')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\Textarea::make('catatan')
                    ->required()
                    ->columnSpanFull(),
                Forms\Components\FileUpload::make('image')
                    ->label('Bukti')
                    ->image()
                    ->directory('bukti')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend(now()->timestamp);
                    }),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pembuat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('tanggal')
                    ->date()
                    ->sortable(),
                Tables\Columns\TextColumn::make('kegiatan')
                    ->searchable(),
                Tables\Columns\TextColumn::make('uang_masuk')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\TextColumn::make('uang_keluar')
                    ->numeric()
                    ->sortable(),
                Tables\Columns\ImageColumn::make('image'),
                Tables\Columns\TextColumn::make('created_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
                Tables\Columns\TextColumn::make('updated_at')
                    ->dateTime()
                    ->sortable()
                    ->toggleable(isToggledHiddenByDefault: true),
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
            'index' => Pages\ListKas::route('/'),
            'create' => Pages\CreateKas::route('/create'),
            'edit' => Pages\EditKas::route('/{record}/edit'),
        ];
    }
}
