@extends('front-end.layouts.main')
@section('content')
    <section class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 pb-12 pt-36 md:pb-16 md:pt-44">
            <a href="{{ route('landingpage') }}#artikel"
                class="font-mono text-sm underline underline-offset-4 hover:bg-signal">←
                Kembali ke beranda</a>
            <h1 class="rise mt-8 font-display text-[15vw] leading-[0.9] tracking-tighter md:text-[8rem]">ARTIKEL
            </h1>
            <p class="rise rise-2 mt-8 max-w-xl text-lg md:text-xl">Panduan singkat soal AI dan website untuk
                bisnis kecil, ditulis dengan bahasa yang mudah dipahami.</p>

            <div class="mt-10 border-4 border-ink">
                <div class="border-b-4 border-ink">
                    <label for="cari" class="sr-only">Cari artikel</label>
                    <input id="cari" type="search" autocomplete="off" placeholder="Cari artikel…"
                        class="w-full bg-paper px-6 py-5 font-mono text-base placeholder:text-ink/60 focus:bg-white" />
                </div>
                <div id="kategori" role="group" aria-label="Filter kategori" class="flex flex-wrap gap-3 p-4">
                    <button type="button" data-cat="" aria-pressed="true"
                        class="chip border-4 border-ink px-4 py-2 font-mono text-sm font-bold hover:bg-ink hover:text-paper">Semua</button>
                    @foreach ($categories as $category)
                        @php
                            $catAttrs = collect($category->getAttributes())->except([
                                'id',
                                'slug',
                                'created_at',
                                'updated_at',
                            ]);
                            $catName =
                                $category->category_name ??
                                ($category->article_category_name ??
                                    ($category->articles_category_name ?? ($category->name ?? $catAttrs->first())));
                        @endphp
                        @if ($catName)
                            <button type="button" data-cat="{{ $catName }}" aria-pressed="false"
                                class="chip border-4 border-ink px-4 py-2 font-mono text-sm font-bold hover:bg-ink hover:text-paper">{{ $catName }}</button>
                        @endif
                    @endforeach
                </div>
            </div>
        </div>
    </section>

    <section class="border-b-4 border-ink">
        <div class="mx-auto max-w-6xl px-5 py-12 md:py-16">
            <p id="hasil" class="font-mono text-sm" aria-live="polite"></p>

            <div id="daftar" class="mt-6 grid gap-6 p-1 sm:grid-cols-2 lg:grid-cols-4">
                @foreach ($articles as $article)
                    @php
                        $catAttrs = $article->category
                            ? collect($article->category->getAttributes())->except([
                                'id',
                                'slug',
                                'created_at',
                                'updated_at',
                            ])
                            : collect();
                        $catName =
                            $article->category?->category_name ??
                            ($article->category?->article_category_name ??
                                ($article->category?->articles_category_name ??
                                    ($article->category?->name ?? ($catAttrs->first() ?? 'Umum'))));

                        $artAttrs = collect($article->getAttributes())->except([
                            'id',
                            'article_category_id',
                            'category_id',
                            'slug',
                            'cover',
                            'image',
                            'thumbnail',
                            'is_published',
                            'created_at',
                            'updated_at',
                        ]);
                        $artTitle =
                            $article->article_title ??
                            ($article->articles_name ??
                                ($article->article_name ?? ($article->title ?? ($artAttrs->first() ?? ''))));
                        $rawDesc =
                            $article->articles_desc ??
                            ($article->article_desc ??
                                ($article->article_excerpt ??
                                    ($article->excerpt ??
                                        ($article->article_content ??
                                            ($article->articles_content ??
                                                ($article->content ?? ($artAttrs->skip(1)->first() ?? '')))))));
                        $artExcerpt = \Illuminate\Support\Str::limit(strip_tags((string) $rawDesc), 140);
                        $artUrl = \Illuminate\Support\Facades\Route::has('article.detail')
                            ? route('article.detail', $article)
                            : '#';
                    @endphp
                    <article data-category="{{ $catName }}"
                        class="art-card relative flex flex-col border-4 border-ink bg-paper p-8 card-hover">
                        <div class="flex items-center justify-between gap-3 font-mono text-xs">
                            <span class="border-2 border-current px-2 py-1 font-bold">{{ $catName }}</span>
                            <time
                                datetime="{{ $article->created_at?->format('Y-m-d') }}">{{ $article->created_at?->format('d M Y') }}</time>
                        </div>
                        <h2 class="art-title mt-5 font-display text-xl">{{ $artTitle }}</h2>
                        <p class="art-excerpt mt-3">{{ $artExcerpt }}</p>
                        <a href="{{ $artUrl }}"
                            class="mt-auto self-start pt-6 font-mono text-sm font-bold underline underline-offset-4 after:absolute after:inset-0 after:content-['']">Baca
                            selengkapnya</a>
                    </article>
                @endforeach
            </div>

            <div id="kosong" class="mt-6 hidden border-4 border-ink p-8 md:p-12">
                <h2 class="font-display text-2xl md:text-3xl">Tidak ada artikel yang cocok</h2>
                <p class="mt-4 max-w-lg">Coba kata kunci lain atau pilih kategori yang berbeda.</p>
                <button type="button" id="reset"
                    class="mt-6 border-4 border-ink bg-ink px-6 py-3 font-mono font-bold text-paper hover:bg-signal hover:text-ink">Tampilkan
                    semua artikel</button>
            </div>
        </div>
    </section>

    <section class="bg-signal">
        <div class="mx-auto max-w-6xl px-5 py-20 text-center">
            <h2 class="font-display text-4xl tracking-tight md:text-7xl">SIAP MULAI?</h2>
            <p class="mx-auto mt-6 max-w-xl text-lg">Ceritakan kebutuhan Anda. Kami bantu tentukan langkah
                pertamanya.</p>
            <div class="mt-10 flex flex-col items-center gap-4 sm:flex-row sm:justify-center">
                <a href="mailto:halo@contoh.com"
                    class="border-4 border-ink bg-ink px-8 py-4 font-mono font-bold text-paper hover:bg-paper hover:text-ink">halo@contoh.com</a>
                <a href="https://wa.me/{{ ($infos ?? null)?->company_no_telephone ?? '6281234567890' }}"
                    class="border-4 border-ink bg-paper px-8 py-4 font-mono font-bold hover:bg-ink hover:text-paper">WhatsApp:
                    {{ ($infos ?? null)?->company_no_telephone ?? '0812-3456-7890' }}</a>
            </div>
        </div>
    </section>

    @push('js')
        <script>
            // Pencarian + kategori
            const input = document.getElementById('cari');
            const chips = [...document.querySelectorAll('.chip')];
            const cards = [...document.querySelectorAll('.art-card')];
            const list = document.getElementById('daftar');
            const empty = document.getElementById('kosong');
            const count = document.getElementById('hasil');
            let kategori = '';

            const norm = (t) => t.toLowerCase().normalize('NFD').replace(/[\u0300-\u036f]/g, '');
            cards.forEach((c) => {
                c.querySelectorAll('.art-title, .art-excerpt').forEach((el) => (el.dataset.raw = el.textContent));
                c.dataset.text = norm(c.dataset.category + ' ' + c.querySelector('.art-title').dataset.raw + ' ' + c
                    .querySelector('.art-excerpt').dataset.raw);
            });

            const highlight = (el, words) => {
                const raw = el.dataset.raw;
                if (!words.length) return (el.textContent = raw);
                const n = norm(raw),
                    marks = [];
                words.forEach((w) => {
                    let i = n.indexOf(w);
                    while (i !== -1) {
                        marks.push([i, i + w.length]);
                        i = n.indexOf(w, i + w.length);
                    }
                });
                marks.sort((a, b) => a[0] - b[0]);
                const merged = [];
                marks.forEach((m) => {
                    const l = merged[merged.length - 1];
                    if (l && m[0] <= l[1]) l[1] = Math.max(l[1], m[1]);
                    else merged.push(m);
                });
                el.textContent = '';
                let pos = 0;
                merged.forEach(([a, b]) => {
                    el.append(raw.slice(pos, a));
                    const m = document.createElement('mark');
                    m.textContent = raw.slice(a, b);
                    el.append(m);
                    pos = b;
                });
                el.append(raw.slice(pos));
            };

            const render = () => {
                const words = norm(input.value.trim()).split(/\s+/).filter(Boolean);
                let shown = 0;
                cards.forEach((c) => {
                    const ok = (!kategori || c.dataset.category === kategori) && words.every((w) => c.dataset.text
                        .includes(w));
                    c.hidden = !ok;
                    c.classList.toggle('hidden', !ok);
                    if (ok) {
                        shown++;
                        c.querySelectorAll('.art-title, .art-excerpt').forEach((el) => highlight(el, words));
                    }
                });
                empty.classList.toggle('hidden', shown !== 0);
                list.classList.toggle('hidden', shown === 0);
                count.textContent = shown === 0 ? '' : 'Menampilkan ' + shown + ' dari ' + cards.length + ' artikel';
                chips.forEach((b) => b.setAttribute('aria-pressed', b.dataset.cat === kategori));
                const q = new URLSearchParams();
                if (input.value.trim()) q.set('q', input.value.trim());
                if (kategori) q.set('kategori', kategori);
                history.replaceState(null, '', q.toString() ? '?' + q : location.pathname);
            };

            input.addEventListener('input', render);
            chips.forEach((b) => b.addEventListener('click', () => {
                kategori = b.dataset.cat;
                render();
            }));
            document.getElementById('reset').addEventListener('click', () => {
                input.value = '';
                kategori = '';
                render();
                input.focus();
            });

            const params = new URLSearchParams(location.search);
            input.value = params.get('q') || '';
            const k = params.get('kategori');
            if (chips.some((b) => b.dataset.cat === k)) kategori = k;
            render();
        </script>
    @endpush
@endsection