  <script>
        const viewport = document.querySelector('.embla__viewport');
        const slides = document.querySelectorAll('.embla__slide');
        let timer = null;
        const next = () => {
            const step = slides[1].offsetLeft - slides[0].offsetLeft;
            const atEnd = viewport.scrollLeft + viewport.clientWidth >= viewport.scrollWidth - 4;
            viewport.scrollTo({
                left: atEnd ? 0 : viewport.scrollLeft + step,
                behavior: 'smooth'
            });
        };
        const prev = () => {
            const step = slides[1].offsetLeft - slides[0].offsetLeft;
            const atStart = viewport.scrollLeft <= 4;
            viewport.scrollTo({
                left: atStart ? viewport.scrollWidth : viewport.scrollLeft - step,
                behavior: 'smooth'
            });
        };
        const stop = () => clearInterval(timer);
        const start = () => {
            stop();
            timer = setInterval(next, 4000);
        };
        viewport.addEventListener('mouseenter', stop);
        viewport.addEventListener('mouseleave', start);
        document.getElementById('ulasan-prev').addEventListener('click', () => {
            prev();
            start();
        });
        document.getElementById('ulasan-next').addEventListener('click', () => {
            next();
            start();
        });
        start();
    </script>
    <script>
        const header = document.querySelector('header');
        const onScroll = () => {
            const scrolled = window.scrollY > 80;
            if (scrolled === header.classList.contains('fixed')) return;
            header.style.transition = 'none';
            if (scrolled) {
                header.classList.remove('absolute');
                header.classList.add('fixed', 'bg-paper', 'border-b-4', 'border-ink', '-translate-y-full');
                header.offsetHeight;
                header.style.transition = '';
                requestAnimationFrame(() => requestAnimationFrame(() => header.classList.remove('-translate-y-full')));
            } else {
                header.classList.remove('fixed', 'bg-paper', 'border-b-4', 'border-ink', '-translate-y-full');
                header.classList.add('absolute');
                header.offsetHeight;
                header.style.transition = '';
            }
        };
        window.addEventListener('scroll', onScroll, {
            passive: true
        });
        onScroll();
    </script>
    <script>
        // Status aktif: sinkron antara scroll-spy dan menu
        // Bottom nav hanya punya 4 tab: beranda, layanan, artikel, tentang.
        // Section lain (proses, kontak) dipetakan ke tab terdekat.
        const spyLinks = document.querySelectorAll('[data-spy]');
        const sectionToTab = {
            beranda: 'beranda',
            proses: 'layanan',
            layanan: 'layanan',
            artikel: 'artikel',
            ulasan: 'artikel',
            tentang: 'tentang',
            kontak: 'tentang',
        };
        const setActive = (tabId) => {
            spyLinks.forEach((link) => {
                const on = link.dataset.spy === tabId;
                link.classList.toggle('is-active', on);
                if (on) link.setAttribute('aria-current', 'page');
                else link.removeAttribute('aria-current');
            });
        };
        const sections = Object.keys(sectionToTab)
            .map((id) => document.getElementById(id))
            .filter(Boolean);
        const observer = new IntersectionObserver((entries) => {
            entries.forEach((entry) => {
                if (!entry.isIntersecting) return;
                const tab = sectionToTab[entry.target.id] || 'beranda';
                setActive(tab);
            });
        }, {
            rootMargin: '-45% 0px -50% 0px'
        });
        sections.forEach((section) => observer.observe(section));
        // Set awal
        setActive('beranda');
    </script>
</body>

</html>