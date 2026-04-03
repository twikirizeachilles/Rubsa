// ── THEME TOGGLE ──────────────────────────────────────────
const themeToggle = document.getElementById('themeToggle');
const root = document.documentElement;
const saved = localStorage.getItem('rubasa-theme') || 'light';
root.setAttribute('data-theme', saved);
if (themeToggle) {
  themeToggle.textContent = saved === 'dark' ? '☀️' : '🌙';
  themeToggle.addEventListener('click', () => {
    const current = root.getAttribute('data-theme');
    const next = current === 'dark' ? 'light' : 'dark';
    root.setAttribute('data-theme', next);
    localStorage.setItem('rubasa-theme', next);
    themeToggle.textContent = next === 'dark' ? '☀️' : '🌙';
  });
}

// ── NAVBAR SCROLL ──────────────────────────────────────────
const navbar = document.getElementById('navbar');
if (navbar) {
  window.addEventListener('scroll', () => {
    navbar.classList.toggle('scrolled', window.scrollY > 30);
  });
  if (window.scrollY > 30) navbar.classList.add('scrolled');
}

// ── MOBILE MENU ────────────────────────────────────────────
const hamburger = document.getElementById('hamburger');
const mobileMenu = document.getElementById('mobileMenu');
if (hamburger && mobileMenu) {
  hamburger.addEventListener('click', () => {
    mobileMenu.classList.toggle('open');
    hamburger.classList.toggle('open');
    const isOpen = mobileMenu.classList.contains('open');
    hamburger.querySelectorAll('span')[0].style.transform = isOpen ? 'rotate(45deg) translate(5px,5px)' : '';
    hamburger.querySelectorAll('span')[1].style.opacity = isOpen ? '0' : '1';
    hamburger.querySelectorAll('span')[2].style.transform = isOpen ? 'rotate(-45deg) translate(5px,-5px)' : '';
    document.body.style.overflow = isOpen ? 'hidden' : '';
  });
  mobileMenu.querySelectorAll('a').forEach(a => {
    a.addEventListener('click', () => {
      mobileMenu.classList.remove('open');
      document.body.style.overflow = '';
    });
  });
}

// ── HERO CAROUSEL ──────────────────────────────────────────
const carouselTrack = document.getElementById('carouselTrack');
const dots = document.querySelectorAll('.carousel-dot');
if (carouselTrack && dots.length) {
  let current = 0;
  const slides = carouselTrack.children.length;
  function goTo(n) {
    current = (n + slides) % slides;
    carouselTrack.style.transform = `translateX(-${current * 100}%)`;
    dots.forEach((d, i) => d.classList.toggle('active', i === current));
  }
  dots.forEach((d, i) => d.addEventListener('click', () => goTo(i)));
  let autoplay = setInterval(() => goTo(current + 1), 4000);
  carouselTrack.parentElement.addEventListener('mouseenter', () => clearInterval(autoplay));
  carouselTrack.parentElement.addEventListener('mouseleave', () => { autoplay = setInterval(() => goTo(current + 1), 4000); });
  goTo(0);
}

// ── FAQ ACCORDION ──────────────────────────────────────────
document.querySelectorAll('.faq-item').forEach(item => {
  item.querySelector('.faq-q').addEventListener('click', () => {
    const wasOpen = item.classList.contains('open');
    document.querySelectorAll('.faq-item').forEach(i => i.classList.remove('open'));
    if (!wasOpen) item.classList.add('open');
  });
});

// ── SCROLL ANIMATION ──────────────────────────────────────
const observer = new IntersectionObserver((entries) => {
  entries.forEach(e => { if (e.isIntersecting) { e.target.classList.add('visible'); } });
}, { threshold: 0.1 });
document.querySelectorAll('.fade-up').forEach(el => observer.observe(el));

// ── TOAST ──────────────────────────────────────────────────
function showToast(msg, type = '') {
  const toast = document.getElementById('toast');
  if (!toast) return;
  toast.textContent = msg;
  toast.className = 'toast' + (type ? ' ' + type : '') + ' show';
  setTimeout(() => toast.classList.remove('show'), 3500);
}

// ── FORM HANDLING ──────────────────────────────────────────
document.querySelectorAll('form').forEach(form => {
  form.addEventListener('submit', e => {
    e.preventDefault();
    const btn = form.querySelector('button[type="submit"], .form-submit');
    if (!btn) return;
    const original = btn.textContent;
    btn.textContent = 'Sending…';
    btn.disabled = true;
    setTimeout(() => {
      btn.textContent = '✓ Sent!';
      btn.style.background = 'linear-gradient(135deg,#25d366,#128c7e)';
      showToast('Message sent! We\'ll contact you shortly.', 'success');
      setTimeout(() => {
        btn.textContent = original;
        btn.style.background = '';
        btn.disabled = false;
        form.reset();
      }, 2500);
    }, 1400);
  });
});

// ── ACTIVE NAV LINK ────────────────────────────────────────
const page = window.location.pathname.split('/').pop() || 'index.php';
document.querySelectorAll('.nav-links a, .mobile-menu a').forEach(a => {
  const href = a.getAttribute('href') || '';
  if (href === page || (page === 'index.php' && href === 'index.php')) {
    a.classList.add('active');
  }
});

// ── COUNTER ANIMATION ─────────────────────────────────────
function animateCount(el) {
  const target = parseInt(el.dataset.target);
  const duration = 2000;
  const step = target / (duration / 16);
  let current = 0;
  const timer = setInterval(() => {
    current = Math.min(current + step, target);
    el.textContent = Math.floor(current) + (el.dataset.suffix || '');
    if (current >= target) clearInterval(timer);
  }, 16);
}
const countObserver = new IntersectionObserver(entries => {
  entries.forEach(e => {
    if (e.isIntersecting) {
      e.target.querySelectorAll('[data-target]').forEach(animateCount);
      countObserver.unobserve(e.target);
    }
  });
}, { threshold: 0.5 });
document.querySelectorAll('.hero-stats, .about-visual').forEach(el => countObserver.observe(el));
