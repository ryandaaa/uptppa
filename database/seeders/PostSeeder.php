<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class PostSeeder extends Seeder
{
    public function run(): void
    {
        // Berita (News)
        $news = [
            [
                'title' => 'Kunjungan Hantu di Kantor UPT PPA: Pegawai Panik, Ternyata Prank',
                'slug' => 'kunjungan-hantu-upt-ppa',
                'category' => 'news',
                'image' => 'https://picsum.photos/seed/ghost/800/600',
                'content' => '<p>PEKANBARU - Suasana kantor UPT PPA Provinsi Riau mendadak gempar pada Senin pagi. Sesosok bayangan putih terlihat melayang di lorong arsip. "Saya kira arwah penasaran, ternyata Pak Budi lagi nyoba kostum Halloween," ujar salah satu staf dengan wajah pucat. Kepala UPT menghimbau agar prank semacam ini tidak dilakukan saat jam kerja karena dapat memicu serangan jantung berjamaah.</p>',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Viral! Kucing Liar Menjabat Sebagai "Security" Baru UPT PPA',
                'slug' => 'kucing-security-baru',
                'category' => 'news',
                'image' => 'https://picsum.photos/seed/cat/800/600',
                'content' => '<p>PEKANBARU - Seekor kucing oranye gemoy bernama "Oyen" secara sepihak mengangkat dirinya sendiri sebagai kepala keamanan di kantor UPT PPA Riau. Oyen rajin patroli di area parkir dan meminta "uang keamanan" berupa Whiskas kepada setiap tamu yang datang. "Kinerjanya bagus, cuma sering tidur saat jam dinas," komentar salah satu pengunjung.</p>',
                'published_at' => now()->subDays(5),
            ],
             [
                'title' => 'Sosialisasi Pencegahan Kekerasan Anak Menggunakan Wayang Kulit Cyberpunk',
                'slug' => 'sosialisasi-wayang-cyberpunk',
                'category' => 'news',
                'image' => 'https://picsum.photos/seed/cyberpunk/800/600',
                'content' => '<p>PEKANBARU - Inovasi tiada henti! UPT PPA Riau menggelar sosialisasi pencegahan kekerasan anak dengan media wayang kulit bertema cyberpunk. Dalang menggunakan kacamata VR dan gamelan diganti dengan musik dubstep. Anak-anak yang hadir tampak bingung namun antusias melihat Gatotkaca dengan tangan robot melawan buto cakil yang jago hacking.</p>',
                'published_at' => now()->subWeeks(1),
            ],
             [
                'title' => 'Rapat Koordinasi Berjalan Alot, Peserta Berebut Gorengan Terakhir',
                'slug' => 'rapat-alot-rebut-gorengan',
                'category' => 'news',
                'image' => 'https://picsum.photos/seed/meeting/800/600',
                'content' => '<p>PEKANBARU - Rapat koordinasi triwulanan UPT PPA Riau berlangsung sengit. Bukan membahas anggaran, namun perdebatan terjadi saat tersisa satu bakwan udang di piring snack. "Ini masalah prinsip keadilan sosial," tegas salah satu peserta. Akhirnya bakwan dipotong menjadi 12 bagian agar adil bagi semua peserta rapat.</p>',
                'published_at' => now()->subWeeks(2),
            ],
             [
                'title' => 'UPT PPA Riau Luncurkan Aplikasi "Anti-Galau" Berbasis AI',
                'slug' => 'aplikasi-anti-galau-ai',
                'category' => 'news',
                'image' => 'https://picsum.photos/seed/ai/800/600',
                'content' => '<p>PEKANBARU - Sebuah terobosan baru! UPT PPA Riau meluncurkan aplikasi "Anti-Galau" yang didukung kecerdasan buatan. Aplikasi ini dapat mendeteksi tingkat kegalauan pengguna melalui selfie dan memberikan saran solusi mulai dari makan seblak hingga karaokean. "Kami harap ini bisa mengurangi tingkat stres masyarakat," ujar pengembang aplikasi.</p>',
                'published_at' => now()->subWeeks(3),
            ],
        ];

        foreach ($news as $item) {
            Post::firstOrCreate(['slug' => $item['slug']], $item);
        }

        // Artikel (Articles)
        $articles = [
            [
                'title' => '5 Tips Menghadapi Mertua yang Hobi Ikut Campur (Versi UPT PPA)',
                'slug' => 'tips-hadapi-mertua',
                'category' => 'article',
                'image' => 'https://picsum.photos/seed/inlaws/800/600',
                'content' => '<p>Konflik dengan mertua seringkali menjadi pemicu kekerasan dalam rumah tangga. Berikut tips ampuh menghadapinya: 1. Senyum dan angguk saja, 2. Pura-pura kesurupan saat ditanya kapan punya anak lagi, 3. Ajak mertua nonton drakor bareng, 4. Belikan martabak manis spesial, 5. Doakan yang terbaik (dari jauh).</p>',
                'published_at' => now()->subDays(1),
            ],
            [
                'title' => 'Mengapa "Healing" ke Bali Bukan Solusi Kekerasan, Tapi Bagus Buat Jiwa',
                'slug' => 'healing-ke-bali',
                'category' => 'article',
                'image' => 'https://picsum.photos/seed/bali/800/600',
                'content' => '<p>Banyak yang salah kaprah bahwa healing adalah solusi utama masalah. Padahal utamanya adalah penyelesaian konflik. Tapi tidak dipungkiri, melihat sunset di pantai Kuta sambil minum kelapa muda memang bisa menurunkan tensi darah drastis. Jadi, selesaikan masalah dulu, baru healing, oke?</p>',
                'published_at' => now()->subDays(3),
            ],
            [
                'title' => 'Sejarah Singkat UPT PPA: Dari Gubuk Derita Menjadi Istana Harapan',
                'slug' => 'sejarah-upt-ppa',
                'category' => 'article',
                'image' => 'https://picsum.photos/seed/history/800/600',
                'content' => '<p>Dulu, kantor UPT PPA hanyalah sebuah garasi kecil. Kini, berkat kerja keras dan doa restu, UPT PPA Riau telah bertransformasi menjadi lembaga bonafide. Konon, bangunan kantor sekarang dulunya adalah bekas markas superhero lokal "Kapten Riau", itulah sebabnya aura kepahlawanan sangat terasa kental di sini.</p>',
                'published_at' => now()->subWeeks(1),
            ],
            [
                'title' => 'Fenomena "Ghosting" Masuk Kategori Kekerasan Psikis?',
                'slug' => 'ghosting-kekerasan-psikis',
                'category' => 'article',
                'image' => 'https://picsum.photos/seed/ghosting/800/600',
                'content' => '<p>Gen Z sering mengeluh di-ghosting gebetan. Apakah ini masuk ranah UPT PPA? Secara teknis, ghosting menyebabkan sakit hati mendalam dan overthinking 7 hari 7 malam. Kami sedang mengkaji pasal "Perbuatan Tidak Menyenangkan Hati dan Perasaan" untuk menjerat para pelaku ghosting ini. Waspadalah!</p>',
                'published_at' => now()->subWeeks(2),
            ],
             [
                'title' => 'Tutorial Membuat Laporan Pengaduan Sambil Masak Rendang',
                'slug' => 'tutorial-lapor-rendang',
                'category' => 'article',
                'image' => 'https://picsum.photos/seed/rendang/800/600',
                'content' => '<p>Multitasking adalah kunci. Ibu-ibu di Riau sangat sibuk. Artikel ini membahas cara efektif menelpon hotline pengaduan UPT PPA sambil mengaduk santan rendang agar tidak pecah. Kuncinya adalah gunakan headset bluetooth dan tetap fokus pada bumbu rempah, biarkan operator kami mencatat keluh kesah Anda.</p>',
                'published_at' => now()->subWeeks(4),
            ],
        ];

        foreach ($articles as $item) {
            Post::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
