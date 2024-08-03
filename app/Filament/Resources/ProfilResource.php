<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProfilResource\Pages;
use App\Filament\Resources\ProfilResource\RelationManagers;
use App\Models\Profil;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Livewire\Features\SupportFileUploads\TemporaryUploadedFile;

class ProfilResource extends Resource
{
    protected static ?string $model = Profil::class;

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $navigationLabel = 'Profil Masjid';

    protected static ?string $modelLabel = 'Profil Masjid';

    protected static ?string $pluralLabel = 'Profil Masjid';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('user_id')
                    ->required()
                    ->hidden()
                    ->numeric(),
                Forms\Components\TextInput::make('nama_masjid')
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('sejarah_singkat')
                    ->required()
                    ->maxLength(16777215)
                    ->columnSpanFull(),
                    Forms\Components\Textarea::make('alamat')
                    ->required()
                    ->maxLength(16777215),
                Forms\Components\TextInput::make('whatsapp')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('telp')
                    ->tel()
                    ->required()
                    ->maxLength(255),
                Forms\Components\Textarea::make('url_map')
                    ->required()
                    ->maxLength(16777215),
                Forms\Components\TextInput::make('email')
                    ->email()
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('channel_yt')
                    ->label('ID Channel Youtube')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('yt')
                    ->label('Link Youtube')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('fb')
                    ->label('Link Facebook')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('ig')
                    ->label('Link Instagram')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('video_profil')
                    ->required()
                    ->maxLength(255),
                Forms\Components\FileUpload::make('image')
                    ->label('Gambar Masjid')
                    ->image()
                    ->directory('gambar_masjid')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend(now()->timestamp);
                    }),
                Forms\Components\FileUpload::make('logo')
                    ->label('Logo')
                    ->image()
                    ->directory('logo_masjid')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend(now()->timestamp);
                    }),
                Forms\Components\FileUpload::make('favicon')
                    ->label('Favicon Masjid')
                    ->image()
                    ->directory('favicon_masjid')
                    ->getUploadedFileNameForStorageUsing(function (TemporaryUploadedFile $file): string {
                    return (string) str($file->getClientOriginalName())->prepend(now()->timestamp);
                    }),
                Forms\Components\TextInput::make('seo')
                    ->label('SEO')
                    ->required()
                    ->maxLength(255),
                Forms\Components\TextInput::make('seo_desc')
                    ->label('SEO Deskripsi')
                    ->required()
                    ->maxLength(255),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('nama_masjid'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([

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
            'index' => Pages\ListProfils::route('/'),
            'create' => Pages\CreateProfil::route('/create'),
            'edit' => Pages\EditProfil::route('/{record}/edit'),
        ];
    }
}
