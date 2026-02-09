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
                'title' => 'Bahas Kasus Anak di Bawah Umur, Mahasiswa Hukum UMRI Audiensi dengan UPT PPA Riau',
                'slug' => 'bahas-kasus-anak-di-bawah-umur-mahasiswa-hukum-umri-audiensi-dengan-upt-ppa-riau',
                'category' => 'news',
                'image' => 'https://static.promediateknologi.id/crop/0x0:0x0/1200x600/webp/photo/p1/11/2025/05/28/WhatsApp-Image-2025-05-28-at-165732-2571315927.jpeg',
                'content' => '<p><strong>HALUANRIAU.CO, PEKANBARU</strong> - Mahasiswa Fakultas Hukum Universitas Muhammadiyah Riau (UMRI) melakukan audiensi dengan Unit Pelaksana Teknis Perlindungan Perempuan dan Anak (UPT PPA) Provinsi Riau. Pertemuan ini membahas kasus penyebaran foto dan video anak di bawah umur yang terjadi di salah satu toko tas di Mall Mandau City, Kota Duri, Kecamatan Mandau, Kabupaten Bengkalis.</p>
<p>Audiensi tersebut dihadiri oleh perwakilan mahasiswa Fakultas Hukum UMRI dan Kepala UPT PPA Provinsi Riau. Dalam diskusi, kedua pihak mengangkat isu perlindungan anak serta peran UPT PPA dalam menangani kasus tersebut.</p>
<p>Lamhot Gabriel Nainggolan, salah satu mahasiswa Fakultas Hukum UMRI, menekankan pentingnya penerapan Pasal 1 Ayat 2 dan Pasal 1 Ayat 12 dalam Undang-Undang Perlindungan Anak.</p>
<p>“Pasal 1 Ayat 2 menyatakan bahwa Perlindungan Anak adalah segala kegiatan untuk menjamin dan melindungi anak serta hak-haknya agar dapat hidup, tumbuh, berkembang, dan berpartisipasi secara optimal sesuai dengan harkat dan martabat kemanusiaan, serta mendapat perlindungan dari kekerasan dan diskriminasi. Sedangkan Pasal 1 Ayat 12 menegaskan bahwa Hak Anak adalah bagian dari hak asasi manusia yang wajib dijamin, dilindungi, dan dipenuhi oleh orang tua, keluarga, masyarakat, negara, pemerintah, dan pemerintah daerah,” jelas Lamhot.</p>
<p>Menanggapi hal tersebut, Kepala UPT PPA Provinsi Riau menyatakan komitmennya untuk mendampingi serta berkoordinasi dengan UPT PPA di Mandau agar kasus ini segera ditangani secara tuntas. Ia juga berharap agar ke depannya tidak terjadi lagi kasus diskriminasi terhadap anak.</p>
<p>Audiensi ini diharapkan menjadi langkah awal dalam membangun komunikasi yang lebih efektif serta memperkuat perlindungan hukum terhadap perempuan dan anak, khususnya di wilayah Riau. Kerja sama antara mahasiswa Fakultas Hukum UMRI dan UPT PPA diharapkan dapat menjadi kekuatan strategis dalam penanganan berbagai kasus yang melibatkan perempuan dan anak.</p>',
                'published_at' => now(),
            ],
            [
                'title' => 'Bullying di Riau, KPPPA koordinasi dampingi psikologis keluarga korban',
                'slug' => 'bullying-di-riau-kpppa-koordinasi-dampingi-psikologis-keluarga-korban',
                'category' => 'news',
                'image' => 'https://cdn.antaranews.com/cache/1200x800/2025/08/01/WhatsApp-Image-2025-08-01-at-10.55.28.jpg.webp',
                'content' => '<p><strong>Jakarta (ANTARA)</strong> - Kementerian Pemberdayaan Perempuan dan Perlindungan Anak berkoordinasi dengan Unit Pelaksana Teknis Daerah Perlindungan Perempuan dan Anak (UPTD PPA) Provinsi Riau maupun Kabupaten Indragiri Hulu untuk memastikan keluarga korban perundungan (bullying) mendapatkan pendampingan psikologis yang memadai.</p>
<p>"Kami melakukan koordinasi intensif dengan UPTD PPA Provinsi Riau maupun Kabupaten Indragiri Hulu guna memastikan penanganan kasus ini berjalan dengan tepat dan menyeluruh," kata Plt Deputi Bidang Perlindungan Khusus Anak Kementerian Pemberdayaan Perempuan dan Perlindungan Anak (KemenPPPA) Pribudiarta Nur Sitepu saat dihubungi di Jakarta, Jumat.</p>
<p>Ia mengatakan salah satu fokus utama saat ini adalah memastikan keluarga korban mendapatkan pendampingan psikologis yang memadai, mengingat dampak emosional yang sangat besar dari peristiwa ini.</p>
<p>Hal itu dikatakan Pribudiarta menanggapi kasus dugaan perundungan di sekolah yang menyebabkan meninggalnya seorang anak berinisial KB (8) di Kabupaten Indragiri Hulu, Riau, beberapa waktu lalu. Pihaknya berharap aparat penegak hukum menaati Undang-undang Sistem Peradilan Pidana Anak (UU SPPA) dalam menangani kasus ini secara hukum.</p>
<p>"Kami menghormati kewenangan aparatur penegak hukum. Kami tetap berharap proses hukum sesuai dengan Undang-Undang Nomor 11 Tahun 2012 tentang Sistem Peradilan Pidana Anak (UU SPPA), mengedepankan scientific evidents dan mempertimbangkan hasil laporan sosial untuk penetapan tindakan," katanya.</p>
<p>Menurutnya, ketika seorang anak melakukan tindakan menyimpang, hal itu sering kali mencerminkan berbagai faktor, seperti kurangnya pengawasan dan pembinaan dari orang dewasa, minimnya pendidikan nilai dan empati, lingkungan yang melakukan pembiaran, serta tidak adanya intervensi saat perilaku bermasalah mulai muncul.</p>
<p>"Anak yang memiliki perilaku menyimpang juga bisa dikategorikan sebagai korban, yakni korban dari sistem pengasuhan, pendidikan, dan lingkungan sosial yang lalai membentuk karakter dan moral anak. Maka, peran kita sebagai orang dewasa menjadi penting untuk menciptakan lingkungan yang aman dan nyaman bagi anak," tutur Pribudiarta Nur Sitepu.</p>
<p>Sebelumnya, KB, seorang siswa sekolah dasar berusia delapan tahun di Indragiri Hulu, Riau, meninggal dunia, karena diduga mengalami perundungan di sekolah. Perundungan diduga dilakukan oleh sejumlah kakak kelas korban. Korban akhirnya menghembuskan nafas terakhir saat tengah dirawat di RSUD di Riau, pada Senin (26/5) dini hari.</p>',
                'published_at' => now(),
            ],
            [
                'title' => 'Menteri PPPA Dorong Pemerintah Daerah Wujudkan Provinsi Riau yang Ramah Perempuan dan Peduli Anak',
                'slug' => 'menteri-pppa-dorong-pemerintah-daerah-wujudkan-provinsi-riau-ramah-perempuan',
                'category' => 'news',
                'image' => 'https://www.kemenpppa.go.id/assets/files/feature_image/688089a5b11a2.jpeg',
                'content' => '<p><strong>Indragiri Hulu (23/07)</strong> - Menteri Pemberdayaan Perempuan dan Perlindungan Anak (PPPA), Arifah Fauzi, bersama Wakil Menteri PPPA, Veronica Tan, tiba di Kabupaten Indragiri Hulu, Provinsi Riau, dalam rangka menghadiri puncak peringatan Hari Anak Nasional (HAN) Tahun 2025. Dalam kunjungan ini, Menteri PPPA bersama Wamen PPPA juga menghadiri Forkopimda (Forum Komunikasi Pimpinan Daerah) bersama seluruh pimpinan daerah, termasuk Gubernur, Bupati/Walikota serta pimpinan instansi vertikal yang berada di Kabupaten Indragiri Hulu.</p>
<p>“Apresiasi saya sampaikan kepada Pemerintah Provinsi Riau, para Bupati/Walikota, dan jajaran pemerintah daerah atas komitmen dan kerja keras dalam membentuk UPTD PPA, menurunkan angka kekerasan, serta memperjuangkan hak-hak anak dan perempuan. Ini menjadi pondasi penting dalam mewujudkan Indonesia yang setara dan inklusif yang juga diwujudkan dalam Penandatangan MoU antara Kemen PPPA dan Pemerintah Provinsi Riau,” ujar Menteri PPPA dalam acara Ramah Tamah bersama Gubernur Riau dan Bupati/Walikota se-Provinsi Riau di Gedung Dang Purnama Rengat, Indragiri Hulu, Selasa (22/7).</p>
<p>Dalam forum tersebut, Menteri PPPA menyoroti potensi besar perempuan dan anak sebagai kekuatan penggerak transformasi sosial dan ekonomi. Data BPS 2024 menunjukkan bahwa perempuan mencakup 49,5% penduduk Indonesia dan anak-anak mencapai 28,4%. Di Provinsi Riau, 69% penduduk perempuan berada dalam usia produktif. Namun demikian, tantangan masih dihadapi, seperti nilai Indeks Pembangunan Gender (IPG) Riau yang masih di bawah rata-rata nasional, serta angka perkawinan anak yang justru mengalami kenaikan di tahun 2024.</p>
<p>“Kami mencatat bahwa IPG Riau tahun ini berada pada angka 89,32, dan masih perlu peningkatan, terutama di wilayah-wilayah seperti Rokan Hulu dan Pelalawan. Selain itu, kasus kekerasan terhadap perempuan dan anak yang tercatat dalam Simfoni PPA tahun ini masih cukup tinggi, dengan 1.072 kasus kekerasan terhadap anak dan 254 kasus terhadap perempuan. Ini menjadi pengingat bahwa kerja kita masih belum selesai disinilah pentingnya sinergi dan kolaborasi pentahelix,” ungkap Menteri PPPA.</p>
<p>Kementerian PPPA terus mendorong penguatan layanan, termasuk ketersediaan rumah aman, tenaga pendamping, dan pelayanan berbasis kebutuhan korban. Menteri PPPA juga menyampaikan apresiasi atas penghargaan Parahita Ekapraya (PPE) yang diraih Provinsi Riau dengan kategori Nindya, serta penghargaan Kabupaten/Kota Layak Anak (KLA) untuk beberapa wilayah seperti Kota Siak, Pekanbaru, dan Dumai.</p>
<p>“Ini adalah hasil dari komitmen kolektif dan kolaboratif dari seluruh pemangku kepentingan. Namun capaian ini bukan tujuan akhir, kita harus terus berbenah dan meningkatkan kualitas layanan dan kebijakan agar lebih responsif terhadap kebutuhan nyata perempuan dan anak,” tegas Menteri PPPA.</p>',
                'published_at' => now()->subHours(2),
            ],
            [
                'title' => 'Kasmarni Berharap Penanganan Kasus Kekerasan Perempuan dan Anak Ditangani secara Terpadu',
                'slug' => 'kasmarni-berharap-penanganan-kasus-kekerasan-perempuan-dan-anak-terpadu',
                'category' => 'news',
                'image' => 'https://diskominfotik.bengkaliskab.go.id/asset/berita/original/3328959601-img_20250718_111753.jpg',
                'content' => '<p><strong>BENGKALIS</strong> - Bupati Bengkalis diwakili Asisten Pemerintahan dan Kesejahteraan Rakyat Andris Wasono berharap penanganan kasus terhadap kekerasan perempuan dan anak dapat ditangani secara tepat, cepat dan terpadu.</p>
<p>Harapan ini disampaikan saat membuka pelatihan manajemen dan penanganan kasus, Jum\'at 18 Juli 2025, di Hotel Surya Bengkalis. Pelatihan ini berlangsung selama tiga hari, mulai dari tanggal 16 hingga 18 Juli 2025, dengan diikuti oleh 44 peserta dari UPTD PPA se-Kecamatan Kabupaten Bengkalis.</p>
<p>Dalam sambutan tertulis Bupati dibacakan Andris Wasono mengatakan, kegiatan ini, sebagai wujud komitmen dan keseriusan Pemerintah Kabupaten Bengkalis untuk terus meningkatkan kemampuan manajerial, memperkuat koordinasi, dan menyusun langkah-langkah strategis dalam penanganan kasus kekerasan terhadap perempuan dan anak, yang masih terus terjadi di tengah-tengah masyarakat.</p>
<p>"Kami berharap, pelatihan ini tidak hanya memberi pemahaman baru, tapi juga mempererat jejaring kerja lintas sektor, agar penanganan kasus di lapangan bisa berjalan lebih cepat, terpadu, dan berpihak pada korban,"tambahnya.</p>
<p>Selanjutnya Andris menyampaikan dalam beberapa tahun terakhir ini, baik dari sisi jumlah maupun jenis kasus yang terjadi telah menjadi fenomena baru di negeri ini. Hal ini ditandai dengan terus meningkatnya kasus kekerasan terhadap perempuan dan anak dari tahun ketahun.</p>
<p>Andris mengatakan, pada tahun 2022 terdapat 142 kasus kekerasan terhadap perempuan dan anak. Justru pada tahun 2023 kasus ini meningkat menjadi 163 kasus. Artinya, dari angka tersebut, seharusnya menjadi cerminan kepada kita bahwa kekerasan terhadap perempuan dan anak bukan sekadar masalah individu atau keluarga, akan tetapi telah menjadi masalah sosial yang perlu kita tangani bersama secara sistemik dan berkelanjutan.</p>
<p>"Alhamdulillah, berkat sinergi dan kolaborasi semua pihak, dengan penguatan komunikasi, peningkatan koordinasi antar lembaga, serta kolaborasi nyata dalam pencegahan dan penanganan kasus. Pada tahun 2024 terjadi penurunan kasus yang cukup signifikan,"ucapnya.</p>',
                'published_at' => now()->subHours(4),
            ],
            [
                'title' => 'UPT PPA Pekanbaru Tangani 79 Kasus Kekerasan Terhadap Anak',
                'slug' => 'upt-ppa-pekanbaru-tangani-79-kasus-kekerasan-terhadap-anak',
                'category' => 'news',
                'image' => 'https://infopublik.id/assets/upload/headline//WhatsApp_Image_2023-07-26_at_11_52_32.jpeg',
                'content' => '<p><strong>Pekanbaru, InfoPublik</strong> - Unit Pelaksana Teknis Perlindungan Perempuan dan Anak (PPA) Kota Pekanbaru sudah menangani 79 kasus kekerasan terhadap anak. Mereka menangani kasus tersebut dari Januari hingga Juni 2023.</p>
<p>Mirisnya sebanyak 28 kasus di merupakan kasus kekerasan seksual. Kepala Dinas Pemberdayaan Perempuan, Perlindungan Anak dan Pemberdayaan Masyarakat (DP3APM) Kota Pekanbaru Chairani menyadari bahwa kasus kekerasan seksual terhadap anak cukup tinggi.</p>
<p>Dirinya menyampaikan bahwa banyaknya kasus karena korban tidak lagi takut melaporkan kekerasan seksual yang dialami. "Mereka tidak enggan melapor ketika menjadi korban kekerasan seksual, apalagi mereka bisa datang langsung ke kantor polisi maupun ke UPT PPA," ungkapnya, Rabu (26/7/2023).</p>
<p>Chairani menilai keluarga saat ini lebih terbuka sehingga tidak takut lagi melapor. Apabila anaknya menjadi korban kekerasan sehingga pihaknya siap menerima laporan tersebut. Pihaknya siap menindaklanjuti laporan yang masuk ke UPT PPA Kota Pekanbaru. Apalagi banyak dari korban masih berstatus sebagai pelajar.</p>
<p>"Kami mengajak masyarakat tidak lagi takut melapor, ketika ada anaknya yang menjadi korban kekerasan," ujarnya. Chairani menambahkan bahwa pihaknya juga menerima laporan terhadap sejumlah kasus lainnya. Ada 26 kasus tentang hak anak, sebelas kasus kekerasan fisik terhadap anak, delapan kasus kekerasan psikis, enam kasus hak asuh anak hingga satu kasus anak berhadapan dengan hukum. (Kominfo7Pku/RD2/toeb)</p>',
                'published_at' => now()->subDays(1),
            ],
        ];

        foreach ($news as $item) {
            Post::firstOrCreate(['slug' => $item['slug']], $item);
        }

        // Artikel (Articles)
        $articles = [
            [
                'title' => 'PAA Riau Imbau Korban Kekerasan Perempuan dan Anak Melapor, Gratis Pendampingan',
                'slug' => 'paa-riau-imbau-korban-kekerasan-perempuan-dan-anak-melapor-gratis-pendampingan',
                'category' => 'article',
                'image' => 'https://www.riauonline.co.id/foto/bank/images2/Kasi-Tindak-Lanjut-PPA-Riau-Iin-Rafida.jpg',
                'content' => '<p><strong>PEKANBARU</strong> - Kasus kekerasan terhadap perempuan dan anak di Provinsi Riau perlu perhatian khusus dari semua pihak, terutama pemerintah. Berdasarkan data yang dihimpun RIAU ONLINE dari Unit Pelaksana Teknis (UPT) Perlindungan Perempuan dan Anak (PPA) Provinsi Riau, kasus kekerasan perempuan dan anak di Bumi Lancang Kuning bak gunung es yang terus mengalami peningkatan.</p>
<p>"Fenomena ini bisa dikatakan seperti gunung es. Mereka yang mengalami itu lebih banyak, namun takut, aib, dan malu. Rata-rata masyarakat kurang paham, yang tidak mau lapor ekonomi menengah ke bawah," kata Kasi Tindak Lanjut, Iin Rafida, pada Senin, 29 Mei 2023.</p>
<p>Pada 2022 saja, UPT PPA Riau mencatat terjadi 172 kasus kekerasan terhadap perempuan dan anak. "Kasus kekerasan seksual tidak hanya pada perempuan yang tinggi namun juga pada anak. Saat ini sama tingginya. Yang kami tangani saat ini anak. Datang langsung ke sini maupun rujukan dari kabupaten/kota," ucap Rafida.</p>
<p>Laporan kekerasan terhadap perempuan dan anak yang masuk ke UPT PPA Riau melalui online dan offline. Selanjutnya, pengaduan akan diproses dan konfirmasi kepada pihak terlapor. Kemudian, akan dilakukan mediasi dan pemantauan. Kasus akan dianggap selesai jika sudah dianggap aman.</p>
<p>"Jika masalah kekerasan seksual anak di bawah umur maka perlu ada pendampingan hukum. Korban juga didampingi pengacara dan tenaga ahli psikolog serta pekerja sosial. Tidak menutup kemungkinan akan ada ahli agama," ungkapnya.</p>
<p>Rafida pun mengimbau kepada warga untuk membuat pengaduan ke PPA Riau jika menjadi korban atau melihat tindak kekerasan terhadap perempuan dan anak. "Untuk perlindungan terhadap perempuan dan anak ini gratis. Jadi, silakan saja melapor bagi yang mengalami kekerasan, atau yang melihat sekalipun," ucapnya.</p>',
                'published_at' => now()->subDays(2),
            ],
            [
                'title' => 'Pemerintah Pusat Apresiasi Komitmen Pemprov Riau dalam Perlindungan Perempuan dan Anak',
                'slug' => 'pemerintah-pusat-apresiasi-komitmen-pemprov-riau-dalam-perlindungan-perempuan-dan-anak',
                'category' => 'article',
                'image' => 'https://mediacenter.riau.go.id/foto_berita/medium/pemerintah-pusat-apresiasi-komitmen.jpg',
                'content' => '<p><strong>INHU</strong> - Pemerintah Provinsi (Pemprov) Riau kembali mendapatkan apresiasi dari pemerintah pusat atas komitmennya dalam mewujudkan perlindungan perempuan dan anak serta penerapan pengarusutamaan gender (PUG) secara menyeluruh di seluruh wilayahnya. Hal ini disampaikan langsung oleh Menteri Pemberdayaan Perempuan dan Perlindungan Anak (PPPA) Republik Indonesia, Arifah Fauzi, dalam kunjungannya ke Provinsi Riau.</p>
<p>Salah satu capaian yang mendapat perhatian adalah keberadaan Unit Pelaksana Teknis Daerah Perlindungan Perempuan dan Anak (UPTD PPA) serta Rumah Aman yang sudah tersebar di 12 Kabupaten/Kota se-Provinsi Riau. Keberadaan lembaga ini tidak hanya tersebar secara merata, namun juga telah memiliki status operasional yang baik, yaitu kelas A dan B, yang menandakan kesiapan dan kelayakan dalam memberikan layanan perlindungan bagi perempuan dan anak korban kekerasan.</p>
<p>“Kami mengapresiasi Pemerintah Provinsi Riau, karena saat ini UPTD PPA nya sudah ada di semua Kabupaten/Kota,” ucap Arifah Fauzi. Selasa, (22/7/2025).</p>
<p>Apresiasi juga diberikan terhadap capaian Provinsi Riau dalam meraih penghargaan Parahita Ekapraya (PPE) dengan kategori Nindya berdasarkan evaluasi tahun 2023. Dimana penghargaan ini diberikan kepada Pemerintah Daerah yang dinilai berhasil menyelenggarakan program PUG secara komprehensif dan berkelanjutan.</p>
<p>Dari 12 daerah yang ada di Riau, sebanyak enam Kabupaten/Kota berhasil meraih kategori Madya dalam penghargaan PPE, sementara empat lainnya mendapatkan predikat Pratama. Ini menunjukkan bahwa semangat dan komitmen untuk memperjuangkan kesetaraan gender tidak hanya hadir di tingkat provinsi, tapi juga di tingkat Pemerintahan Kabupten/Kota.</p>
<p>Arifah Fauzi menyebut, penghargaan PPE merupakan bentuk pengakuan atas peran aktif para pimpinan daerah, organisasi perangkat daerah, serta seluruh pihak yang terlibat dalam mendorong pembangunan yang adil dan setara bagi semua gender. Ia berharap, capaian ini dapat menjadi pemicu semangat bagi daerah lain di Riau yang belum meraih penghargaan, sekaligus memperkuat pencapaian yang sudah ada agar dapat ditingkatkan pada tahun-tahun mendatang.</p>
<p>“Mudah-mudahan untuk tahun 2024 pencapaian ini bisa meningkat lagi, dari Nindya menjadi Mentor. Kita tunggu nanti pengumumannya, saat ini masih menunggu jadwal dari beberapa pihak,” terang Arifah Fauzi.</p>
<p>Namun begitu, Menteri PPPA juga memberikan catatan penting terkait masih tingginya angka perkawinan anak di Provinsi Riau. Berdasarkan data, pada tahun 2024 angka perkawinan anak di Riau tercatat sebesar 4,13 persen, angka ini mengalami kenaikan dibanding tahun sebelumnya. Kondisi ini dinilai membutuhkan perhatian khusus dari semua pemangku kepentingan, baik di tingkat Provinsi maupun Kabupaten/Kota.</p>
<p>“Bisa dilakukan kolaborasi dengan berbagai pihak agar pernikahan diusia anak ini dapat diturunkan lagi,” katanya.</p>
<p>Menurutnya, Permohonan dispensasi perkawinan yang masih tinggi menjadi salah satu faktor penyumbang yang harus segera dikendalikan. Maka dari itu, perlu langkah-langkah konkret, kolaboratif, dan lintas sektor agar praktik perkawinan anak dapat ditekan secara signifikan dan dicegah sejak dini, termasuk melalui edukasi, pendampingan, dan regulasi yang konsisten.</p>
<p>“Diperlukan perhatian khusus dari berbagai pihak dalam mengendalikan terjadinya permohonan dispensasi perkawinan hingga level terendah,” tutupnya.</p>',
                'published_at' => now()->subDays(3),
            ],
        ];

        foreach ($articles as $item) {
            Post::firstOrCreate(['slug' => $item['slug']], $item);
        }
    }
}
