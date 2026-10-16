<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        $menus = [
            [
                'nama_menu' => 'Mie Ayam Original',
                'kategori' => 'Makanan',
                'harga' => 16000,
                'deskripsi' => 'Mie ayam klasik dengan topping ayam suwir dan sayuran segar.',
                'gambar' => 'Mie Ayam Original 1.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Mie Ayam Pangsit',
                'kategori' => 'Makanan',
                'harga' => 18000,
                'deskripsi' => 'Mie ayam lengkap dengan pangsit goreng renyah.',
                'gambar' => 'Mie Ayam Pangsit 2.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Mie Ayam Bakso',
                'kategori' => 'Makanan',
                'harga' => 19000,
                'deskripsi' => 'Mie ayam dengan tambahan bakso sapi pilihan.',
                'gambar' => 'Mie Ayam Bakso 3.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Pangsit Rebus',
                'kategori' => 'Makanan',
                'harga' => 15000,
                'deskripsi' => 'Pangsit rebus kuah kaldu ayam hangat.',
                'gambar' => 'Pangsit Rebus 4.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Pangsit Chili Oil',
                'kategori' => 'Makanan',
                'harga' => 15000,
                'deskripsi' => 'Pangsit rebus kuah chili oil dengan topping ayam suwir.',
                'gambar' => 'Pangsit Chili Oil 5.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Mie Jebew',
                'kategori' => 'Makanan',
                'harga' => 15000,
                'deskripsi' => 'Mie Jebew dengan pedas gurih rasanya.',
                'gambar' => 'Mie Jebew 6.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Es Teh Manis',
                'kategori' => 'Minuman',
                'harga' => 3000,
                'deskripsi' => 'Es teh manis segar.',
                'gambar' => 'Es Teh Manis 7.jpeg',
                'status' => 'Tersedia',
            ],
            [
                'nama_menu' => 'Es Jeruk',
                'kategori' => 'Minuman',
                'harga' => 5000,
                'deskripsi' => 'Es jeruk peras asli.',
                'gambar' => 'Es Jeruk 8.jpeg',
                'status' => 'Tersedia',
            ],
        ];

        foreach ($menus as $menu) {
            \App\Models\Menu::create($menu);
        }
    }
}