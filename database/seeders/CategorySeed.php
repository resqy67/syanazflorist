<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\categories;

class CategorySeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            ['name' => 'Papan Bunga Duka Cita'],
            ['name' => 'Papan Bunga Selamat & Sukses'],
            ['name' => 'Papan Bunga Selamat Ulang Tahun'],
        ];

        foreach ($categories as $category) {
            categories::create($category);
        }
    }
}
