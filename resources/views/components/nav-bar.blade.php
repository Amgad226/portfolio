<header class="site-header">
    <nav id="desktop-nav" aria-label="Primary navigation">
        <a id="desktop-nav-name" class="logo" href="#profile" aria-label="Amjad Alwattar, home">
            <span>AA</span>
            Amjad Alwattar
        </a>
        <x-nav-links />
    </nav>
</header>

<script>
    document.addEventListener('DOMContentLoaded', () => {
        const header = document.querySelector('.site-header');
        const aboutSection = document.querySelector('#about');
        const mobileViewport = window.matchMedia('(max-width: 780px)');

        if (!header || !aboutSection) {
            return;
        }

        const updateHeaderVisibility = () => {
            const hasReachedAbout = window.scrollY >= Math.max(0, aboutSection.offsetTop - 120);
            const shouldShow = !mobileViewport.matches || hasReachedAbout;

            header.classList.toggle('site-header--visible', shouldShow);
            header.setAttribute('aria-hidden', shouldShow ? 'false' : 'true');
        };

        window.addEventListener('scroll', updateHeaderVisibility, { passive: true });
        window.addEventListener('resize', updateHeaderVisibility);
        mobileViewport.addEventListener('change', updateHeaderVisibility);
        updateHeaderVisibility();
    });
</script>
