<?php

namespace Database\Seeders;

use App\Models\Review;
use Illuminate\Database\Seeder;

class ReviewSeeder extends Seeder
{
    public function run(): void
    {
        Review::create([
            'review_name' => 'Budi Santoso',
            'review_position' => 'Pemilik Toko Online',
            'review_content' => 'Setup AI-nya sederhana dan timnya menjelaskan setiap langkah dengan jelas.',
            'is_visible' => true,
        ]);

        Review::create([
            'review_name' => 'Siti Aminah',
            'review_position' => 'Pemilik Usaha Jasa',
            'review_content' => 'Website selesai sesuai jadwal dan mudah kami kelola sendiri lewat panel admin.',
            'is_visible' => true,
        ]);

        Review::create([
            'review_name' => 'Andi Wijaya',
            'review_position' => 'Manajer Operasional',
            'review_content' => 'Hasilnya rapi dan responsif, pelanggan kami juga merasa lebih nyaman.',
            'is_visible' => true,
        ]);
    }
}