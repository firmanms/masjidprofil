<?php

namespace App\Filament\Resources;

use App\Filament\Resources\LayananResource\Pages;
use App\Filament\Resources\LayananResource\RelationManagers;
use App\Models\Halaman;
use App\Models\Layanan;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class LayananResource extends Resource
{
    protected static ?string $model = Layanan::class;

    protected static ?int $navigationSort = 6;

    protected static ?string $navigationGroup = 'Publikasi';

    protected static ?string $navigationLabel = 'Layanan';

    protected static ?string $modelLabel = 'Layanan';

    protected static ?string $pluralLabel = 'Layanan';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::user()->id),
                Forms\Components\TextInput::make('judul')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Select::make('option')
                    ->label('Link')
                    ->options([
                        'internal' => 'Internal',
                        'external' => 'External',
                    ])
                    ->reactive()
                    ->afterStateUpdated(function ($state, callable $set) {
                        $set('selectedOption', $state);
                        if ($state === 'internal') {
                            $data = Halaman::pluck('judul', 'slug')->toArray();
                            $set('dynamicOptions', $data);
                        }
                    })
                    ->required(),
                    Forms\Components\Group::make([
                        Forms\Components\Select::make('url')
                            ->label('Pilih Halaman')
                            ->options(fn ($get) => $get('dynamicOptions') ?? [])
                            ->visible(fn ($get) => $get('selectedOption') === 'internal'),


                            Forms\Components\TextInput::make('url')
                            ->label('Input Teks')
                            ->visible(fn ($get) => $get('selectedOption') === 'external')
                            ->required(),
                    ]),
                Forms\Components\Textarea::make('deskripsi')
                    ->required(),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Layanan')
                    ->image()
                    ->directory('layanan')
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
                Tables\Columns\TextColumn::make('judul')
                    ->searchable(),
                Tables\Columns\TextColumn::make('url')
                    ->searchable(),
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
            'index' => Pages\ListLayanans::route('/'),
            'create' => Pages\CreateLayanan::route('/create'),
            'edit' => Pages\EditLayanan::route('/{record}/edit'),
        ];
    }
}
