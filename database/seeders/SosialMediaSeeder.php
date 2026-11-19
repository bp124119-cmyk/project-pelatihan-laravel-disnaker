<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SosialMedia;

class SocialMediaSeeder extends Seeder
{
    public function run(): void
    {
        $socialMedia = [
            [
                'social_media_name' => 'Instagram',
                'social_media_link' => 'https://instagram.com/siap.ai',
                'social_media_icon' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="5"/><circle cx="12" cy="12" r="4.5"/><circle cx="17.5" cy="6.5" r="0.8" fill="currentColor"/></svg>',
            ],
            [
                'social_media_name' => 'LinkedIn',
                'social_media_link' => 'https://linkedin.com/company/siap-ai',
                'social_media_icon' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"><rect x="2" y="2" width="20" height="20" rx="2"/><line x1="7" y1="10" x2="7" y2="17"/><circle cx="7" cy="7" r="0.8" fill="currentColor"/><path d="M11 17v-7M11 13c0-2 1-3 3-3s3 1 3 3v4"/></svg>',
            ],
            [
                'social_media_name' => 'TikTok',
                'social_media_link' => 'https://tiktok.com/@siap.ai',
                'social_media_icon' => '<svg viewBox="0 0 24 24" class="h-5 w-5" fill="none" stroke="currentColor" stroke-width="2"><path d="M9 3v12a3 3 0 1 0 3-3"/><path d="M9 3c0 3 2 5 5 5"/></svg>',
            ],
        ];

        foreach ($socialMedia as $social) {
            SosialMedia::create([
                'social_media_name' => $social['social_media_name'],
                'social_media_link' => $social['social_media_link'],
                'social_media_icon' => $social['social_media_icon'],
            ]);
        }
    }
}