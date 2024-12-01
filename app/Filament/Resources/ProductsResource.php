<?php

namespace App\Filament\Resources;

use App\Filament\Resources\ProductsResource\Pages;
use App\Models\Products;
use Filament\Resources\RelationManagers\BelongsToRelationManager;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;
use Illuminate\Support\Str;


class ProductsResource extends Resource
{
    protected static ?string $model = Products::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // build form
                Forms\Components\TextInput::make('name')
                    ->label('Nama Produk')
                    ->reactive() // Memastikan input memicu reaktivitas
                    ->debounce(500)
                    ->afterStateUpdated(
                        fn($state, callable $set) =>
                        $set('slug', Str::slug($state))
                    ),
                Forms\Components\TextInput::make('slug')
                    ->disabled()
                    ->unique(ignoreRecord: true),
                    Forms\Components\Textarea::make('description')->label('Deskripsi singkat Produk'),
                Forms\Components\TextInput::make('size')->label('Ukuran Produk'),
                Forms\Components\TextInput::make('price')->label('Harga Produk'),
                Forms\Components\BelongsToSelect::make('category_id')->label('Kategori Produk')
                    ->relationship('category', 'name'),
                Forms\Components\FileUpload::make('image')->label('Gambar Produk'),

            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                // build columns
                Tables\Columns\TextColumn::make('name')->label('Nama Produk'),
                Tables\Columns\TextColumn::make('description')->label('Deskripsi Produk'),
                Tables\Columns\TextColumn::make('price')->label('Harga Produk'),
                Tables\Columns\TextColumn::make('size')->label('Ukuran Produk'),
                Tables\Columns\ImageColumn::make('image')->label('Gambar Produk'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make(),
                Tables\Actions\DeleteAction::make(),
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
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListProducts::route('/'),
            'create' => Pages\CreateProducts::route('/create'),
            'edit' => Pages\EditProducts::route('/{record}/edit'),
        ];
    }
}
