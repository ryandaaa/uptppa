@extends('layouts.public')

@section('content')
    @include('components.public.hero-section')

    <section class="py-0">
        <div class="container mx-auto px-6 md:px-12 flex flex-col md:flex-row">
            <div class="flex-1 bg-primary p-8 text-white border-r border-white/10">
                <h3 class="text-xl font-bold mb-4 uppercase">Pengaduan Kekerasan</h3>
                <p class="text-sm mb-4">Laporkan tindak kekerasan terhadap perempuan dan anak yang dapat dilakukan korban, keluarga atau masyarakat umum kepada UPT PPA Provinsi Riau melalui:</p>
                <p class="font-bold mb-4">Telepon: Telp / WA : 0811 5201 515</p>
                <div class="flex gap-2">
                    <button class="bg-secondary text-white px-4 py-2 font-bold text-xs uppercase hover:bg-slate-700 transition">Telepon</button>
                    <button class="bg-green-500 px-4 py-2 font-bold text-xs uppercase hover:bg-green-600 transition">Whatsapp</button>
                </div>
            </div>
            <div class="flex-1 bg-secondary p-8 text-white border-r border-white/10">
                <h3 class="text-xl font-bold mb-4 uppercase">Tentang UPT PPA</h3>
                <p class="text-sm mb-4">Unit Pelaksana Teknis Perlindungan Perempuan dan Anak (UPT PPA) dibentuk pemerintah provinsi dan kabupaten/kota untuk memberikan layanan bagi perempuan dan anak.</p>
                <ul class="text-sm list-disc list-inside">
                    <li>Pengaduan Kekerasan</li>
                    <li>Penjangkauan korban</li>
                    <li>Pengelolaan kasus</li>
                    <li>Penampungan sementara</li>
                </ul>
            </div>
            <div class="flex-1 bg-tertiary p-8 text-slate-900">
                <h3 class="text-xl font-bold mb-4 uppercase">Pengaduan Umum</h3>
                <p class="text-sm mb-4">Setiap Aparatur Dinas Pemberdayaan Perempuan, Perlindungan Anak, Pengendalian Penduduk dan Keluarga Berencana wajib melaporkan gratifikasi yang diterima kepada KPK.</p>
                <button class="text-sm underline font-bold uppercase hover:text-white transition">Laporan Aspirasi dan Pengaduan Online Rakyat</button>
            </div>
        </div>
    </section>

    <section class="bg-white dark:bg-slate-800 py-12">
        <div class="container mx-auto px-6 md:px-12 text-center">
            <div class="border-4 border-slate-200 dark:border-slate-700 p-2 inline-block max-w-4xl bg-yellow-50 dark:bg-slate-900">
                <img alt="Layanan Pengaduan Infographic" class="w-full h-auto shadow-lg border border-slate-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuCzy8GpdG89QoZEFjnag9IVjhw6McxRaXNp_mAFiPhuLXqLo2KX17hJfpVJm3xyg1MclLbELJBYuhHoBbj6hggdpRSdvf0H04-jKaqvg89jwXmOe3_rkAsH-78dBZuMALI1V0E5YFbpMvsvobSG_azO5yEje110erTNXQLgu6cQC0WoFNxdAUu6CwdekeRXHmLWYii926LrUR0b9zM3hcA1Lrs1fsZ833FSmx6A4nFswzTYPqnR2Gr-zKS3k3lUsiR9sbKnWSzVgQPJ"/>
                <div class="p-8 text-slate-800 dark:text-slate-100">
                    <h4 class="text-3xl font-black text-secondary mb-4 uppercase">Layanan Pengaduan</h4>
                    <p class="text-xl font-bold mb-6">Kekerasan Terhadap Perempuan dan Anak</p>
                    <div class="bg-white dark:bg-slate-800 p-6 border-2 border-primary inline-block">
                        <p class="mb-2 font-bold">SCAN QR CODE UNTUK MELAPORKAN</p>
                        <img alt="QR Code" class="mx-auto my-4 w-32 h-32" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAVuBoGN5jvKnbiaZeGd6NuWOnjgSgXUK92lub0VkzO7lQCgUxSTe93mkLB8zflI_oKuWoeDIr30S_33CavbjvnaiNgcTUWYhllrLyuCJ8TCqomEjgSgpAx4H97MM2rsgH65pjv8RL7le15IXr3T2n_D-Taoy958hiSbCmJqBvawO4zDQYYc0VQdMJkTbwLkpmLSKse3tZR1odLuHm6C2gb4iwIgGmWhIgZ-gRna02Kb9nZh9OxpAsgjDF3_e8QbNByuSoy9M19Y16X"/>
                        <p class="text-xs text-primary dark:text-quaternary font-bold underline">https://uptppa.kalteng.go.id/info-cepat.html</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <main class="container mx-auto px-6 md:px-12 py-12 grid grid-cols-1 md:grid-cols-3 gap-12">
        <div class="md:col-span-2">
            <h3 class="text-2xl font-black border-b-4 border-primary pb-2 mb-8 uppercase flex items-center">
                <span class="material-icons mr-2 text-primary">article</span> Artikel
            </h3>
            <div class="space-y-8">
                <!-- Article Item 1 -->
                <div class="flex flex-col sm:flex-row gap-6 pb-8 border-b border-slate-200 dark:border-slate-700">
                    <img alt="Thumbnail Artikel" class="w-full sm:w-48 h-32 object-cover border border-slate-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuA3O6XBLK9fLIxSVo4st60CudI2nqZcGIzzA0CE_BGesXMu-6bthzmWunjfzE_6uKSua09Gdb5u85P4GoTukQUaKZIGu6wgpVfNyvkv5wwJrX7cWj7mE9AF3BoQn96yz4bBqpLbOpJMOmzylsir4-RsRAoU9-QEM7UrRpEc31w7LkCN2pbiu8x-w_LSbZJgVutyceeWmXv4cGiMvh4o_u8aFWIgn53JFFhpYLqixVKk10JGOtG5YIVH-x1nGL-pGccbzCIJMv-5NZhn"/>
                    <div>
                        <h4 class="font-bold text-lg mb-2 text-primary dark:text-quaternary hover:underline cursor-pointer">Kegiatan Pembagian Flyer UPT PPA</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">Pembagian Flyer Di Car Free Day sebagai langkah sosialisasi pencegahan kekerasan terhadap perempuan dan anak di wilayah Riau...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-slate-500 font-bold">2024/08/28 01:48:20</span>
                            <a class="text-xs font-bold px-3 py-1 bg-slate-200 dark:bg-slate-700 text-slate-800 dark:text-slate-200 hover:bg-primary hover:text-white transition" href="#">BACA</a>
                        </div>
                    </div>
                </div>
                <!-- Article Item 2 -->
                <div class="flex flex-col sm:flex-row gap-6 pb-8 border-b border-slate-200 dark:border-slate-700">
                    <img alt="Thumbnail Artikel" class="w-full sm:w-48 h-32 object-cover border border-slate-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuBeqFGTzmL9Qr6PTLMEL0RN8e5g9-6HKKV6_Cv4zeEUjAkoGTsUnuYQLsYuR-WV9NS_NMVGOuKtYXpgQfIH6U7VYcgxajtULjrfj1upu3j-6GvxAuGgyu06Mopks7I743wi4MPeQrrlV-b-G6u8kwAhd8FrxbO8F6KJMwj19QIYd8CGcny6dlIAa_jXM0tOkfqNccSuIXzIWnVg_IdWcJj58W-ymExFOaPpSz675PK9TxOuU9zJGc4KMXaUPW0pgkdYh75iGafTnQV2"/>
                    <div>
                        <h4 class="font-bold text-lg mb-2 text-primary dark:text-quaternary hover:underline cursor-pointer">Dinas P3APPKB bersama tim pelayanan UPT PPA melakukan kunjungan kerja</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">Dinas P3APPKB melakukan Kunjungan Kerja ke Dinas P3AKB Provinsi Jawa Barat dan juga UPTD PPA Provinsi Jawa Barat...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-slate-500 font-bold">2024/03/29 03:43:02</span>
                            <a class="text-xs font-bold px-3 py-1 bg-slate-200 dark:bg-slate-700 text-slate-800 dark:text-slate-200 hover:bg-primary hover:text-white transition" href="#">BACA</a>
                        </div>
                    </div>
                </div>
                <!-- Article Item 3 -->
                <div class="flex flex-col sm:flex-row gap-6 pb-8 border-b border-slate-200 dark:border-slate-700">
                    <img alt="Thumbnail Artikel" class="w-full sm:w-48 h-32 object-cover border border-slate-300" src="https://lh3.googleusercontent.com/aida-public/AB6AXuB8OX1nfjOYqcRfNQK8vM9p9HWDJd-DZxFdisUQma3-jGM2d_6dyqLUJMBRSeqkmZ4rSVxayqtDGe1EG4SVg8oNBoefgYzom0NHbVjuRo2Mc7KglpvYJtX9MOEP7TIqkoP-f_yM9GFvJahE0BcIQgD9pQ_tb77y1Skq51ncEx9gKgQ0ddEydCblu8l_or3KevIcDxbRj5EbEVom1x7u27_-Q52T_GeY8t2j7HGRakupQ9oGIi7Lfk1Qa0FU0Ejqhowx2Pw-vAXqYmOB"/>
                    <div>
                        <h4 class="font-bold text-lg mb-2 text-primary dark:text-quaternary hover:underline cursor-pointer">Dari Cerita di Ruang Praktik Sebelum Pandemi</h4>
                        <p class="text-sm text-slate-600 dark:text-slate-400 mb-4 line-clamp-2">Pendamping korban bullying dapat melakukan hal-hal sederhana untuk membantu korban dapat merasa lebih nyaman di lingkungannya...</p>
                        <div class="flex justify-between items-center">
                            <span class="text-xs text-slate-500 font-bold">2023/10/16 20:01:58</span>
                            <a class="text-xs font-bold px-3 py-1 bg-slate-200 dark:bg-slate-700 text-slate-800 dark:text-slate-200 hover:bg-primary hover:text-white transition" href="#">BACA</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-8">
                <button class="bg-slate-100 dark:bg-slate-700 px-6 py-2 text-sm font-bold border border-slate-300 dark:border-slate-600 hover:bg-primary hover:text-white hover:border-primary transition">SEMUA ARTIKEL</button>
            </div>
        </div>

        <div class="md:col-span-1">
            <h3 class="text-2xl font-black border-b-4 border-primary pb-2 mb-8 uppercase flex items-center">
                <span class="material-icons mr-2 text-primary">feed</span> Berita
            </h3>
            <div class="space-y-6">
                <div class="p-4 border border-slate-200 dark:border-slate-700 bg-slate-50 dark:bg-slate-800/50">
                    <h4 class="font-bold text-sm text-primary dark:text-quaternary mb-3 hover:underline cursor-pointer uppercase">Fasilitasi pertemuan serah terima pemulangan anak korban KDRT</h4>
                    <div class="flex gap-4">
                        <img alt="News thumb" class="w-16 h-16 object-cover flex-shrink-0" src="https://lh3.googleusercontent.com/aida-public/AB6AXuAxOUC69x9UOtfgIR9bp_3xYnk89zfqNDDMxlo4KAiqJ5w-jlrTE91ez1M-ExB7Lcx2o2M5JTp7aPZ36a5wjocQM0G2gOw8k_AyY9L_HjeuHZwCp4UZKUQio-rzIt6ucyLTvvAdvjcyMIroj839RNxr69hJshwRPSkBquElHF6NTkpuDMybM6eoWr-m5a5mgGCYCa74z17wNvzwBSDSmDcW1RafS5ibXCysmGav0Q5zPseXJrx6SOByu2zJD4SnLGYMkAnRvNnKvk2O"/>
                        <p class="text-xs text-slate-600 dark:text-slate-400 leading-tight">Tindak kekerasan dalam rumah tangga (KDRT) merupakan tindak kekerasan yang...</p>
                    </div>
                    <div class="mt-4 flex justify-between items-center pt-3 border-t border-slate-200 dark:border-slate-700">
                        <span class="text-[10px] text-slate-500 font-mono">2023/10/16 20:07:48</span>
                        <a class="text-[10px] font-bold px-2 py-1 bg-white dark:bg-slate-900 border border-slate-300 dark:border-slate-700 uppercase" href="#">Baca</a>
                    </div>
                </div>
            </div>
            <div class="mt-6">
                <button class="w-full bg-slate-100 dark:bg-slate-700 px-6 py-2 text-sm font-bold border border-slate-300 dark:border-slate-600 hover:bg-primary hover:text-white hover:border-primary transition">SEMUA BERITA</button>
            </div>
        </div>
    </main>
@endsection