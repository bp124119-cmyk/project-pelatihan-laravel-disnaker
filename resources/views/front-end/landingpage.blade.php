@extends('front-end.layouts.main')
@section('content')
<!-- BERANDA / HERO -->
    <section id="beranda" class="relative border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 pb-20 pt-36 md:pb-32 md:pt-44">
            <h1 class="rise font-display text-[15vw] leading-[0.9] md:text-[9rem] tracking-tighter">
                SETUP AI.<br />
                BANGUN WEB.<br />
                <span class="bg-signal px-2">JALAN.</span>
            </h1>
            <p class="rise rise-2 mt-10 max-w-xl text-lg md:text-xl">
                SIAP.AI membantu bisnis Anda memasang AI dan membangun website yang siap dipakai. Dari pengaturan awal
                sampai sistem berjalan.
            </p>
            <div class="rise rise-3 mt-10 flex flex-col gap-4 sm:flex-row">
                <a href="#kontak"
                    class="border-4 border-ink bg-ink px-6 py-4 text-center font-mono font-bold text-paper shadow-brutal hover:translate-x-1 hover:translate-y-1 hover:shadow-none">Mulai
                    Proyek</a>
                <a href="#layanan"
                    class="border-4 border-ink bg-paper px-6 py-4 text-center font-mono font-bold hover:bg-ink hover:text-paper">Lihat
                    Layanan</a>
            </div>

        </div>
    </section>

    <!-- PROSES -->
    <section id="proses" class="border-b-4 border-ink bg-ink text-paper">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">PROSES</h2>
            <ol class="mt-12 grid gap-8 md:grid-cols-3">
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">01</p>
                    <h3 class="mt-2 font-display text-2xl">Diskusi</h3>
                    <p class="mt-3 text-paper/80">Kami memahami kebutuhan dan tujuan bisnis Anda.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">02</p>
                    <h3 class="mt-2 font-display text-2xl">Bangun</h3>
                    <p class="mt-3 text-paper/80">Setup AI dan pengembangan website dikerjakan sesuai rencana yang
                        disepakati.</p>
                </li>
                <li class="border-t-4 border-signal pt-6">
                    <p class="font-mono text-sm">03</p>
                    <h3 class="mt-2 font-display text-2xl">Serah Terima</h3>
                    <p class="mt-3 text-paper/80">Sistem diserahkan lengkap beserta panduan penggunaan.</p>
                </li>
            </ol>
        </div>
    </section>

    <!-- LAYANAN -->
    <section id="layanan" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">LAYANAN</h2>

            <div class="mt-12 grid grid-cols-1 gap-[4px] border-4 border-ink bg-ink md:grid-cols-2 xl:grid-cols-4">

                <article
                    class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                    <h3 class="font-display text-2xl">Setup AI</h3>
                    <p class="mt-4">Pemasangan dan konfigurasi AI untuk kebutuhan operasional bisnis Anda,
                        disesuaikan
                        dengan alur kerja yang sudah ada.</p>
                    <ul class="mt-6 space-y-2 font-mono text-sm">
                        <li>— Konfigurasi model AI</li>
                        <li>— Integrasi dengan sistem yang dipakai</li>
                        <li>— Panduan penggunaan untuk tim</li>
                    </ul>
                </article>

                <article
                    class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                    <h3 class="font-display text-2xl">Website</h3>
                    <p class="mt-4">Website company profile, landing page, dan aplikasi web yang cepat, rapi, dan
                        mudah
                        dikelola.</p>
                    <ul class="mt-6 space-y-2 font-mono text-sm">
                        <li>— Desain UI/UX</li>
                        <li>— Pengembangan frontend dan backend</li>
                        <li>— Panel admin untuk pengelolaan konten</li>
                    </ul>
                </article>

                <article
                    class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                    <h3 class="font-display text-2xl">Chatbot</h3>
                    <p class="mt-4">Chatbot untuk menjawab pertanyaan pelanggan secara otomatis, termasuk di luar jam
                        kerja.</p>
                    <ul class="mt-6 space-y-2 font-mono text-sm">
                        <li>— Pelatihan dengan data bisnis Anda</li>
                        <li>— Integrasi WhatsApp dan website</li>
                        <li>— Pemantauan dan perbaikan jawaban</li>
                    </ul>
                </article>

                <article
                    class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                    <h3 class="font-display text-2xl">Otomasi</h3>
                    <p class="mt-4">Otomatisasi tugas berulang supaya tim fokus pada pekerjaan yang lebih penting.
                    </p>
                    <ul class="mt-6 space-y-2 font-mono text-sm">
                        <li>— Alur kerja otomatis</li>
                        <li>— Sinkronisasi data antar aplikasi</li>
                        <li>— Laporan otomatis</li>
                    </ul>
                </article>

                <article
                    class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                    <h3 class="font-display text-2xl">Panel Admin</h3>
                    <p class="mt-4">Dashboard untuk mengelola konten, data, dan pengguna tanpa teknis yang rumit.</p>
                    <ul class="mt-6 space-y-2 font-mono text-sm">
                        <li>— Kelola konten dan produk</li>
                        <li>— Manajemen pengguna dan akses</li>
                        <li>— Statistik dan ringkasan data</li>
                    </ul>
                </article>

                <article
                    class="relative bg-paper p-8 card-hover md:max-xl:[&:last-child:nth-child(odd)]:col-span-2 xl:[&:last-child:nth-child(4n+1)]:col-span-4 xl:[&:nth-last-child(2):nth-child(4n+1)]:col-span-2 xl:[&:last-child:nth-child(4n+2)]:col-span-2 xl:[&:last-child:nth-child(4n+3)]:col-span-2">
                    <h3 class="font-display text-2xl">Pelatihan &amp; Dukungan</h3>
                    <p class="mt-4">Pendampingan setelah sistem berjalan, supaya tim Anda percaya diri memakainya.
                    </p>
                    <ul class="mt-6 space-y-2 font-mono text-sm">
                        <li>— Pelatihan tim langsung</li>
                        <li>— Dokumentasi penggunaan</li>
                        <li>— Dukungan setelah serah terima</li>
                    </ul>
                </article>

            </div>
        </div>
    </section>

    <!-- ARTIKEL -->
    <section id="artikel" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <h2 class="font-display text-4xl md:text-6xl tracking-tight">ARTIKEL</h2>

            <div class="mt-12 grid gap-0 lg:grid-cols-4 border-4 border-ink">
                <article
                    class="relative flex flex-col border-b-4 lg:border-b-0 lg:border-r-4 last:border-b-0 lg:last:border-r-0 border-ink p-8 card-hover">
                    <p class="font-mono text-xs">03 Nov 2026</p>
                    <h3 class="mt-4 font-display text-xl">Apa Itu Setup AI untuk Bisnis Kecil?</h3>
                    <p class="mt-3">Langkah awal memasang AI tanpa tim teknis besar, dan hal yang perlu disiapkan
                        lebih
                        dulu.</p>
                    <a href="#"
                        class="mt-auto pt-6 self-start font-mono text-sm font-bold underline underline-offset-4 after:absolute after:inset-0 after:content-['']">Baca
                        selengkapnya</a>
                </article>

                <article
                    class="relative flex flex-col border-b-4 lg:border-b-0 lg:border-r-4 last:border-b-0 lg:last:border-r-0 border-ink p-8 card-hover">
                    <p class="font-mono text-xs">06 Nov 2026</p>
                    <h3 class="mt-4 font-display text-xl">Chatbot untuk Layanan Pelanggan: Kapan Cocok?</h3>
                    <p class="mt-3">Cara menilai apakah chatbot cocok untuk layanan Anda, beserta batas yang perlu
                        diperhatikan.</p>
                    <a href="#"
                        class="mt-auto pt-6 self-start font-mono text-sm font-bold underline underline-offset-4 after:absolute after:inset-0 after:content-['']">Baca
                        selengkapnya</a>
                </article>

                <article
                    class="relative flex flex-col border-b-4 lg:border-b-0 lg:border-r-4 last:border-b-0 lg:last:border-r-0 border-ink p-8 card-hover">
                    <p class="font-mono text-xs">10 Nov 2026</p>
                    <h3 class="mt-4 font-display text-xl">Menjaga Data Saat Memakai AI</h3>
                    <p class="mt-3">Hal dasar yang perlu diperiksa sebelum memasukkan data perusahaan ke sistem AI.
                    </p>
                    <a href="#"
                        class="mt-auto pt-6 self-start font-mono text-sm font-bold underline underline-offset-4 after:absolute after:inset-0 after:content-['']">Baca
                        selengkapnya</a>
                </article>

                <article
                    class="relative flex flex-col border-b-4 lg:border-b-0 lg:border-r-4 last:border-b-0 lg:last:border-r-0 border-ink p-8 card-hover">
                    <p class="font-mono text-xs">12 Nov 2026</p>
                    <h3 class="mt-4 font-display text-xl">Memilih Website untuk Bisnis Kecil</h3>
                    <p class="mt-3">Perbandingan company profile, landing page, dan aplikasi web, serta cara memilih
                        yang sesuai kebutuhan.</p>
                    <a href="#"
                        class="mt-auto pt-6 self-start font-mono text-sm font-bold underline underline-offset-4 after:absolute after:inset-0 after:content-['']">Baca
                        selengkapnya</a>
                </article>
            </div>
        </div>
    </section>

    <!-- ULASAN -->
    <section id="ulasan" class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-20">
            <div class="flex items-end justify-between gap-6">
                <h2 class="font-display text-4xl md:text-6xl tracking-tight">ULASAN</h2>
                <div class="flex gap-3">
                    <button type="button" id="ulasan-prev" aria-label="Ulasan sebelumnya"
                        class="h-12 w-12 border-4 border-ink font-mono text-xl font-bold hover:bg-ink hover:text-paper">&lt;</button>
                    <button type="button" id="ulasan-next" aria-label="Ulasan berikutnya"
                        class="h-12 w-12 border-4 border-ink font-mono text-xl font-bold hover:bg-ink hover:text-paper">&gt;</button>
                </div>
            </div>

            <div class="embla mt-12">
                <div
                    class="embla__viewport overflow-x-auto snap-x snap-mandatory p-3 [scrollbar-width:none] [&::-webkit-scrollbar]:hidden">
                    <div class="embla__container flex">
                        <div
                            class="embla__slide min-w-0 flex-[0_0_100%] border-ink md:flex-[0_0_50%] lg:flex-[0_0_33.333%] md:border-r-4">
                            <figure class="relative h-full p-8 card-hover">
                                <blockquote class="text-lg">“Setup AI-nya sederhana dan timnya menjelaskan setiap
                                    langkah dengan jelas.”</blockquote>
                                <figcaption class="mt-6 font-mono text-sm">— Dummy, Pemilik Toko Online</figcaption>
                            </figure>
                        </div>
                        <div
                            class="embla__slide min-w-0 flex-[0_0_100%] border-ink md:flex-[0_0_50%] lg:flex-[0_0_33.333%] md:border-r-4">
                            <figure class="relative h-full p-8 card-hover">
                                <blockquote class="text-lg">“Website selesai sesuai jadwal dan mudah kami kelola
                                    sendiri
                                    lewat panel admin.”</blockquote>
                                <figcaption class="mt-6 font-mono text-sm">— Dummy, Pemilik Usaha Jasa</figcaption>
                            </figure>
                        </div>
                        <div
                            class="embla__slide min-w-0 flex-[0_0_100%] border-ink md:flex-[0_0_50%] lg:flex-[0_0_33.333%] md:border-r-4">
                            <figure class="relative h-full p-8 card-hover">
                                <blockquote class="text-lg">“Hasilnya rapi dan responsif, pelanggan kami juga merasa
                                    lebih nyaman.”</blockquote>
                                <figcaption class="mt-6 font-mono text-sm">— Dummy, Manajer Operasional</figcaption>
                            </figure>
                        </div>
                        <div
                            class="embla__slide min-w-0 flex-[0_0_100%] border-ink md:flex-[0_0_50%] lg:flex-[0_0_33.333%] md:border-r-4">
                            <figure class="relative h-full p-8 card-hover">
                                <blockquote class="text-lg">“Pengerjaannya cepat, dan tim selalu merespons setiap
                                    pertanyaan kami.”</blockquote>
                                <figcaption class="mt-6 font-mono text-sm">— Dummy, Founder Startup</figcaption>
                            </figure>
                        </div>
                        <div
                            class="embla__slide min-w-0 flex-[0_0_100%] border-ink md:flex-[0_0_50%] lg:flex-[0_0_33.333%] md:border-r-4">
                            <figure class="relative h-full p-8 card-hover">
                                <blockquote class="text-lg">“Chatbot-nya membantu menjawab pertanyaan pelanggan di luar
                                    jam kerja.”</blockquote>
                                <figcaption class="mt-6 font-mono text-sm">— Dummy, Admin Layanan Pelanggan
                                </figcaption>
                            </figure>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- KONTAK -->
    <section id="kontak" class="bg-signal">
        <div class="mx-auto max-w-6xl px-5 py-20 text-center">
            <h2 class="font-display text-4xl md:text-7xl tracking-tight">SIAP MULAI?</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg">Ceritakan kebutuhan Anda. Kami bantu tentukan langkah pertamanya.
            </p>
            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
                <a href="mailto:halo@contoh.com"
                    class="border-4 border-ink bg-ink px-8 py-4 font-mono font-bold text-paper hover:bg-paper hover:text-ink">halo@contoh.com</a>
                <a href="https://wa.me/6281234567890"
                    class="border-4 border-ink bg-paper px-8 py-4 font-mono font-bold hover:bg-ink hover:text-paper">WhatsApp:
                    0812-3456-7890</a>
            </div>
        </div>
    </section>
@endsection



