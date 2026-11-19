<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        DB::table('staff')->insert([
            [
                'name' => 'Staf Dummy 1',
                'position' => 'Developer',
                'description' => 'Bertanggung jawab atas pengembangan website dan integrasi sistem klien.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staf Dummy 2',
                'position' => 'AI Specialist',
                'description' => 'Mengatur konfigurasi model AI dan memastikan alur kerja berjalan sesuai kebutuhan.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Staf Dummy 3',
                'position' => 'Client Support',
                'description' => 'Mendampingi klien setelah serah terima dan membantu panduan penggunaan tim.',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}