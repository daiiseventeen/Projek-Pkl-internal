<?php

namespace Database\Seeders;
use App\Models\Product;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Product::create([
            'nama' => 'Smartphone',
            'slug' => 'smartphone',
            'deskripsi' => 'Handphone dengan spesifikasi yang sangat bagus',
            'harga' => 1000.00,
            'gambar' => 'smartphone.jpg',
            'stok' => '50',
            'categori_id' => '1',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'nama' => 'Kemeja',
            'slug' => 'kemeja',
            'deskripsi' => 'Kemeja dengan stylelish zaman sekarang',
            'harga' => 2000.00,
            'gambar' => 'kemeja.jpg',
            'stok' => '100',
            'categori_id' => '2',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
        Product::create([
            'nama' => 'Cocacola',
            'slug' => 'cocacola',
            'deskripsi' => 'Minuman bersoda',
            'harga' => 3000.00,
            'gambar' => 'soda.jpg',
            'stok' => '150',
            'categori_id' => '3',
            'created_at' => now(),
            'updated_at' => now(),
        ]);
    }
}
