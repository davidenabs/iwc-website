<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PageResource\Pages;
use App\Filament\Resources\PageResource\RelationManagers;
use App\Models\Page;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Forms\Get;
use Filament\Forms\Set;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;

class PageResource extends Resource
{
    protected static ?string $model = Page::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\TextInput::make('title')
                    ->required()
                    ->columnSpan('full')
                    ->afterStateUpdated(function (Get $get, Set $set, ?string $old, ?string $state) {
                        if (($get('slug') ?? '') !== Str::slug($old)) {
                            return;
                        }

                        $set('slug', Str::slug($state));
                    }),
                Forms\Components\TextInput::make('slug')
                    // ->disabled()
                    ->required()
                    ->columnSpan('full')
                    ->unique(Page::class, 'slug', fn ($record) => $record, ignoreRecord: true),
                Forms\Components\Textarea::make('description')
                    // ->required()
                    ->columnSpan('full'),
                Forms\Components\Textarea::make('keyword')
                    ->placeholder('e.g: word, faith, church')
                    ->columnSpan('full'),
                Forms\Components\RichEditor::make('content')
                    ->required()
                    ->disableToolbarButtons([
                        'codeBlock',
                    ])
                    ->columnSpan('full'),
                Forms\Components\Toggle::make('add_to_nav')
                    // ->option
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('title')
                    ->searchable()
                    ->wrap()
                    ->sortable(),
                Tables\Columns\TextColumn::make('slug')
                    ->sortable()
                    ->wrap()
                    ->description(fn (Page $record): string => url('page/'.$record->slug))
                    ->copyable()
                    ->copyableState(fn (Page $record): string => url('page/'.$record->slug))
                    ->copyMessage('Page URL copied')
                    ->copyMessageDuration(1500),
                Tables\Columns\TextColumn::make('description')
                    ->sortable()
                    ->wrap()
                    ->limit(100),
                Tables\Columns\TextColumn::make('add_to_nav')
                    ->sortable(),
                Tables\Columns\TextColumn::make('created_at')
                    ->sortable()
                    ->dateTime(),
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
            ])
            ->emptyStateActions([
                Tables\Actions\CreateAction::make(),
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
            'index' => Pages\ListPages::route('/'),
            'create' => Pages\CreatePage::route('/create'),
            'edit' => Pages\EditPage::route('/{record}/edit'),
        ];
    }
}
