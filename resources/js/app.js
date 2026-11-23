import 'bootstrap';

// Pengatur tema (Light / Dark / Auto) untuk halaman portofolio
(function () {
    const root = document.documentElement;
    const mq = window.matchMedia('(prefers-color-scheme: dark)');
    let mode = 'auto';

    function apply() {
        root.setAttribute('data-bs-theme', mode === 'auto' ? (mq.matches ? 'dark' : 'light') : mode);
    }

    apply();
    mq.addEventListener('change', () => { if (mode === 'auto') apply(); });
    document.querySelectorAll('[data-theme]').forEach((btn) => {
        btn.addEventListener('click', () => {
            mode = btn.getAttribute('data-theme');
            apply();
        });
    });
})();
