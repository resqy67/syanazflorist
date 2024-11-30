<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Products;

class ProductSeed extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = [
            [
                'category_id' => 1, // ID kategori 'Karangan Bunga Ucapan'
                'name' => 'Bunga Ucapan Selamat',
                'description' => 'Karangan bunga untuk memberikan ucapan selamat pada acara spesial.',
                'image' => 'images/bunga-ucapan-selamat.jpg', // Sesuaikan path gambar
                'slug' => 'bunga-ucapan-selamat',
                'price' => 350000,
            ],
            [
                'category_id' => 2, // ID kategori 'Karangan Bunga Pernikahan'
                'name' => 'Bunga Pernikahan Elegan',
                'description' => 'Karangan bunga elegan untuk momen pernikahan yang istimewa.',
                'image' => 'images/bunga-pernikahan-elegan.jpg', // Sesuaikan path gambar
                'slug' => 'bunga-pernikahan-elegan',
                'price' => 500000,
            ],
            [
                'category_id' => 3, // ID kategori 'Karangan Bunga Duka'
                'name' => 'Bunga Duka Cita',
                'description' => 'Karangan bunga duka cita untuk memberikan penghormatan terakhir.',
                'image' => 'images/bunga-duka-cita.jpg', // Sesuaikan path gambar
                'slug' => 'bunga-duka-cita',
                'price' => 450000,
            ],
        ];

        foreach ($products as $product) {
            Products::create($product);
        }
    }
}
