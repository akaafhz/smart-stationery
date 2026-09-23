<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str; // Penting untuk fungsi Str::slug()

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        // Daftar kategori yang akan diinput (saya tambahkan Aksesoris Komputer sesuai tugas Anda)
        $categories = [
            'Alat Tulis',
            'Buku Tulis',
            'Perlengkapan Kantor',
            'Perlengkapan Sekolah',
            'Kertas',
            'Aksesoris Komputer' // Penambahan untuk menjawab Tugas nomor 6
        ];

        foreach ($categories as $name) {
            // updateOrCreate akan mengecek: Jika slug sudah ada, update. Jika belum ada, buat baru.
            Category::updateOrCreate(
                ['slug' => Str::slug($name)],
                [
                    'name' => $name,
                    'description' => 'Kategori ' . $name,
                    'is_active' => true,
                ]
            );
        }
    }
}
