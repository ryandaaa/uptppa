<?php

namespace Database\Seeders;

use App\Models\Gallery;
use Illuminate\Database\Seeder;

class GallerySeeder extends Seeder
{
    public function run(): void
    {
        // Gambar (Images)
        $images = [
            [
                'title' => 'Lomba Makan Kerupuk Antar Staff',
                'slug' => 'lomba-makan-kerupuk',
                'type' => 'image',
                'thumbnail' => 'https://picsum.photos/seed/fun/800/600',
                'description' => 'Keseruan lomba makan kerupuk dalam rangka 17 Agustus di halaman kantor UPT PPA. Pak Kepala Dinas juara 1 karena curang pakai tangan.',
                'published_at' => now()->subDays(10),
            ],
            [
                'title' => 'Penenangan "Godzilla" di Kota Pekanbaru',
                'slug' => 'penanganan-godzilla',
                'type' => 'image',
                'thumbnail' => 'https://picsum.photos/seed/monster/800/600',
                'description' => 'Tim UPT PPA turun tangan menenangkan Godzilla yang sedang tantrum di pusat kota. Ternyata Godzilla cuma butuh pelukan dan validasi emosi.',
                'published_at' => now()->subWeeks(2),
            ],
             [
                'title' => 'Senam Pagi Bersama Teletubbies',
                'slug' => 'senam-teletubbies',
                'type' => 'image',
                'thumbnail' => 'https://picsum.photos/seed/gym/800/600',
                'description' => 'Senam pagi Jumat kali ini mengundang bintang tamu Tinky Winky, Dipsy, Laa-Laa, dan Po. Berpelukan!',
                'published_at' => now()->subWeeks(3),
            ],
        ];

        // Video
        $videos = [
            [
                'title' => 'Profil UPT PPA: The Movie (Trailer)',
                'slug' => 'profil-upt-ppa-movie',
                'type' => 'video',
                'thumbnail' => 'https://picsum.photos/seed/movie/800/600',
                'description' => 'Trailer film biografi epik tentang perjuangan UPT PPA Riau, disutradarai oleh Christopher Nolan cabang Panam. Coming soon di bioskop kesayangan Anda.',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ', // Rikroll link stays for the meme
                'published_at' => '2023-12-01 10:00:00',
            ],
            [
                'title' => 'Tutorial Menghilang dari Masalah',
                'slug' => 'tutorial-menghilang',
                'type' => 'video',
                'thumbnail' => 'https://picsum.photos/seed/ninja/800/600',
                'description' => 'Video edukasi cara menghilang ala ninja ketika ditanya "kapan nikah" saat lebaran. Sangat edukatif.',
                'video_url' => 'https://www.youtube.com/embed/dQw4w9WgXcQ',
                'published_at' => '2023-11-20 16:30:00',
            ],
        ];

        // Documents
        $documents = [
            [
                'title' => 'Rahasia Resep Gulai Patin Kepala Dinas',
                'slug' => 'rahasia-resep-gulai',
                'type' => 'document',
                'file_path' => 'documents/sop.pdf',
                'published_at' => '2023-01-01 00:00:00',
            ],
            [
                'title' => 'Panduan Bertahan Hidup dari deadline',
                'slug' => 'panduan-deadline',
                'type' => 'document',
                'file_path' => 'documents/pergub.pdf',
                'published_at' => '2023-01-01 00:00:00',
            ],
            [
                'title' => 'Proposal Pembangunan Roket ke Mars',
                'slug' => 'proposal-mars',
                'type' => 'document',
                'file_path' => 'documents/standar.pdf',
                'published_at' => '2023-01-01 00:00:00',
            ],
        ];

        foreach (array_merge($images, $videos, $documents) as $item) {
            Gallery::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
