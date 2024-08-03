<?php

namespace App\Filament\Resources;

use App\Filament\Resources\MenuResource\Pages;
use App\Filament\Resources\MenuResource\RelationManagers;
use App\Models\Halaman;
use App\Models\Menu;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Facades\Auth;
use Saade\FilamentAdjacencyList\Forms\Components\AdjacencyList;

class MenuResource extends Resource
{
    protected static ?string $model = Menu::class;

    protected static ?string $navigationGroup = 'Pengaturan';

    protected static ?string $navigationLabel = 'Menu Web';

    protected static ?string $modelLabel = 'Menu Web';

    protected static ?string $pluralLabel = 'Menu Web';

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Hidden::make('user_id')
                    ->default(Auth::user()->id),
                Forms\Components\TextInput::make('name')
                    ->required()
                    ->maxLength(255),
                    AdjacencyList::make('subject')
                    ->maxDepth(1)
                    ->form([
                        Forms\Components\TextInput::make('label')
                            ->required(),
                            Forms\Components\Select::make('option')
                                    ->label('Link')
                                    ->options([
                                        'internal' => 'Internal',
                                        'external' => 'External',
                                        'statis'   => 'Statis',
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
                                        Forms\Components\Select::make('link')
                                            ->label('Pilih Halaman')
                                            ->options(fn ($get) => $get('dynamicOptions') ?? [])
                                            ->visible(fn ($get) => $get('selectedOption') === 'internal'),


                                            Forms\Components\TextInput::make('link')
                                            ->label('Input Teks')
                                            ->visible(fn ($get) => $get('selectedOption') === 'external')
                                            ->required(),

                                            Forms\Components\Select::make('link')
                                            ->label('Halaman Statis')
                                            ->options([
                                                'statis/pengurus'      =>'Pengurus',
                                                'statis/blog'          =>'Artikel',
                                                'statis/event'         =>'Event/Kegiatan',
                                                'statis/galeri'        =>'Galeri',
                                                'statis/kas'           =>'Kas',
                                            ])
                                            ->visible(fn ($get) => $get('selectedOption') === 'statis')
                                            ->required(),
                                    ]),


                    ])
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('user.name')
                    ->label('Pembuat')
                    ->sortable(),
                Tables\Columns\TextColumn::make('name'),

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
            'index' => Pages\ListMenus::route('/'),
            'create' => Pages\CreateMenu::route('/create'),
            'edit' => Pages\EditMenu::route('/{record}/edit'),
        ];
    }
}
