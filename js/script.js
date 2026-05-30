// ── Drawer (mobile menu) ──────────────────────────────────────
const hamburger    = document.getElementById('hamburger');
const drawer       = document.getElementById('drawer');
const drawerOverlay = document.getElementById('drawerOverlay');
const drawerClose  = document.getElementById('drawerClose');

let scrollY = 0;

function openDrawer() {
    scrollY = window.scrollY;
    document.body.style.top = `-${scrollY}px`;
    document.body.classList.add('no-scroll');
    drawer.classList.add('open');
    drawerOverlay.style.display = 'block';
    requestAnimationFrame(() => drawerOverlay.classList.add('active'));
    hamburger.classList.add('active');
}

function closeDrawer() {
    document.body.classList.remove('no-scroll');
    document.body.style.top = '';
    window.scrollTo(0, scrollY);
    drawer.classList.remove('open');
    drawerOverlay.classList.remove('active');
    drawerOverlay.addEventListener('transitionend', () => {
        drawerOverlay.style.display = 'none';
    }, { once: true });
    hamburger.classList.remove('active');
}

hamburger.addEventListener('click', () => {
    drawer.classList.contains('open') ? closeDrawer() : openDrawer();
});

drawerClose.addEventListener('click', closeDrawer);
drawerOverlay.addEventListener('click', closeDrawer);

document.querySelectorAll('.drawer-link, .drawer-btn').forEach(link => {
    link.addEventListener('click', closeDrawer);
});

// ── Navbar scroll effect ──────────────────────────────────────
const navbar = document.getElementById('navbar');
window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 50);
}, { passive: true });

// ── Scroll animations ─────────────────────────────────────────
const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            observer.unobserve(entry.target);
        }
    });
}, { threshold: 0.12 });

document.querySelectorAll('.fade-in').forEach(el => observer.observe(el));

// ── Smooth scroll ─────────────────────────────────────────────
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            const top = target.getBoundingClientRect().top + window.scrollY - 70;
            window.scrollTo({ top, behavior: 'smooth' });
        }
    });
});
