<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class InfoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Info::create([
            'company_name' => config('app.name'),
            'company_desc' => config('Siap berdiri untuk menjebatanni bisnis kecil di Purwakarta'),
            'company_address' => config('Purwakarta'),
            'company_visi' => config('ini visi dari sama-ai')
            'company_misi' => config('ini misi dari sama-ai'),
            'company_no_telephone' => config('9091212421'),
            'company_founder_img' => config('img/foto-founder.png'),
            'company_founder_desc' => config('lorem ipsum dolar st amat'),


        ])
    }
}
