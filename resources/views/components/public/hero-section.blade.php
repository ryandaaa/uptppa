<section class="hero-gradient text-white py-32 min-h-[600px] flex items-center relative overflow-hidden" x-data="{ 
    activeSlide: 0, 
    slides: [
        {
            title: 'LAYANAN TERPADU SATU PINTU',
            description: 'Kami hadir untuk memberikan perlindungan maksimal bagi perempuan dan anak di Bumi Lancang Kuning. Pelayanan yang Cepat, Tepat, dan penuh Empati adalah komitmen kami untuk memulihkan martabat korban.'
        },
        {
            title: 'PEMULIHAN TRAUMA & PSIKOLOGIS',
            description: 'Luka fisik mungkin sembuh, namun luka batin butuh perawatan. Tim psikolog klinis profesional kami siap mendampingi pemulihan kesehatan mental korban kekerasan hingga kembali berdaya dan percaya diri.'
        },
        {
            title: 'BANTUAN HUKUM & KEADILAN',
            description: 'Setiap warga negara berhak mendapatkan keadilan. Kami menyediakan pendampingan hukum gratis mulai dari pelaporan kepolisian, penyidikan, hingga proses pengadilan demi tegaknya kebenaran.'
        },
        {
            title: 'RUMAH AMAN (SHELTER)',
            description: 'Keamanan Anda adalah prioritas utama. Kami menyediakan fasilitas penampungan sementara yang rahasia, aman, dan nyaman bagi korban yang nyawanya terancam, dengan pengawasan 24 jam.'
        },
        {
            title: 'PENCEGAHAN & EDUKASI',
            description: 'Mencegah lebih baik daripada menangani. Bersama kita bangun kesadaran masyarakat Riau untuk memutus mata rantai kekerasan terhadap perempuan dan anak mulai dari lingkungan keluarga.'
        }
    ],
    timer: null,
    next() {
        this.activeSlide = (this.activeSlide + 1) % this.slides.length;
    },
    prev() {
        this.activeSlide = (this.activeSlide === 0) ? (this.slides.length - 1) : (this.activeSlide - 1);
    },
    startTimer() {
        this.timer = setInterval(() => this.next(), 5000);
    },
    stopTimer() {
        if(this.timer) clearInterval(this.timer);
    }
}" x-init="startTimer()" @mouseenter="stopTimer()" @mouseleave="startTimer()">
    
    <div class="hero-pattern absolute inset-0 opacity-20"></div>

    <!-- Decoration Circles -->
    <div class="absolute top-[-50px] right-[-50px] w-64 h-64 bg-white/5 rounded-full blur-3xl"></div>
    <div class="absolute bottom-[-50px] left-[-50px] w-64 h-64 bg-black/10 rounded-full blur-3xl"></div>
    
    <div class="container mx-auto px-6 md:px-12 relative z-10 flex items-center">
        <!-- Content Container -->
        <div class="w-full max-w-4xl mx-auto text-center md:text-left relative h-[300px] flex flex-col justify-center">
            
            <template x-for="(slide, index) in slides" :key="index">
                <div 
                    x-show="activeSlide === index"
                    x-transition:enter="transition ease-out duration-700 transform"
                    x-transition:enter-start="opacity-0 translate-x-8"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-300 transform absolute top-0 left-0 right-0"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-8"
                    class="w-full"
                >
                    <h2 class="text-3xl md:text-5xl font-bold mb-4 uppercase tracking-tight leading-tight drop-shadow-md" x-text="slide.title"></h2>
                    <div class="w-16 h-1 bg-white mb-4 mx-auto md:mx-0 rounded-full opacity-80"></div>
                    <p class="text-base md:text-lg leading-relaxed font-normal text-white/90 drop-shadow-sm max-w-2xl mx-auto md:mx-0" x-text="slide.description"></p>
                </div>
            </template>

        </div>
    </div>

    <!-- Navigation Arrows -->
    <button @click="prev()" class="absolute left-4 md:left-8 top-1/2 transform -translate-y-1/2 text-white/50 hover:text-white transition z-20 hover:scale-110">
        <span class="material-icons text-4xl md:text-5xl font-light">chevron_left</span>
    </button>
    <button @click="next()" class="absolute right-4 md:right-8 top-1/2 transform -translate-y-1/2 text-white/50 hover:text-white transition z-20 hover:scale-110">
        <span class="material-icons text-4xl md:text-5xl font-light">chevron_right</span>
    </button>

    <!-- Indicators -->
    <div class="absolute bottom-8 left-1/2 transform -translate-x-1/2 z-20 flex space-x-3">
        <template x-for="(slide, index) in slides" :key="index">
            <button 
                @click="activeSlide = index" 
                class="h-2 rounded-full transition-all duration-500"
                :class="activeSlide === index ? 'w-12 bg-white' : 'w-2 bg-white/40 hover:bg-white/60'"
                :aria-label="'Go to slide ' + (index + 1)"
            ></button>
        </template>
    </div>
</section>