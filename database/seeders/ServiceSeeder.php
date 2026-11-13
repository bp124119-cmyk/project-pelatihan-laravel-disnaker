<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [

            [
                'service_name' => 'Setup AI',
                'service_content' => 'pemasangan dan konfigurasi AI untuk kebutuhan oprasional bisinis, termasuk integrasi dengan sistem yang ada dan pelatihan pengguna untuk memaksimalkan manfaat dari teknologi AI.',
            ],
            [
                'service_name' => 'website',
                'service_content' => 'website company profile, e-commerce, dan website lainnya yang sesuai dengan kebutuhan bisnis Anda, dengan desain responsif dan fitur-fitur yang dapat meningkatkan pengalaman pengguna.',
            ],
            [
                'service_name' => 'chatbot',
                'service_content' => 'pengembangan dan implementasi chatbot untuk layanan pelanggan, dengan kemampuan untuk merespons pertanyaan umum dan memberikan informasi yang akurat serta efisien.',
            ],
            [
                'service_name' => 'otomatis',
                'service_content' => 'otomatisasi proses bisnis untuk meningkatkan efisiensi dan produktivitas, termasuk integrasi dengan sistem yang ada dan pelatihan pengguna untuk memaksimalkan manfaat dari otomatisasi.',    
            ],
            [
                'service_name' => 'panel admin',
                'service_content' => 'dasbor admin untuk mengelola dan mengontrol berbagai aspek aplikasi, dengan fitur-fitur yang memungkinkan pengolahan data, analisis, dan pengambilan keputusan yang efektif.',
            ],
            [
                'service_name' => 'pelatihan dan pendukung',
                'service_content' => 'pendamping setelah sistem berjalan, termasuk pelatihan pengguna, dukungan teknis, dan pemeliharaan berkala untuk memastikan kinerja optimal.',
            ]

        ];

        foreach ($services as $service) {
            Service::create([
                'service_name' => $service['service_name'],
                'service_content' => $service['service_content']
            ]);
        }
    }
}
