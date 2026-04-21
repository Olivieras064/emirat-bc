// =============================================
// EMIRAT BUSINESS CENTER - Main JS
// =============================================

document.addEventListener('DOMContentLoaded', function () {

  // === Navbar scroll effect ===
  const navbar = document.querySelector('.navbar-emirat');
  if (navbar) {
    window.addEventListener('scroll', () => {
      if (window.scrollY > 50) {
        navbar.style.boxShadow = '0 4px 30px rgba(0,0,0,0.15)';
      } else {
        navbar.style.boxShadow = '0 2px 20px rgba(0,0,0,0.08)';
      }
    });
  }

  // === Active nav link ===
  const currentPage = window.location.pathname.split('/').pop() || './';
  document.querySelectorAll('.nav-link-custom').forEach(link => {
    const href = link.getAttribute('href');
    if (href === currentPage || (currentPage === '' && href === './')) {
      link.classList.add('active');
    }
  });

  // === Intersection Observer for animations ===
  const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
  };

  const observer = new IntersectionObserver((entries) => {
    entries.forEach((entry) => {
      if (entry.isIntersecting) {
        entry.target.style.opacity = '1';
        entry.target.style.transform = 'translateY(0)';
        observer.unobserve(entry.target);
      }
    });
  }, observerOptions);

  // Observe cards and sections
  document.querySelectorAll('.service-card, .feature-item, .dest-card').forEach((el, i) => {
    el.style.opacity = '0';
    el.style.transform = 'translateY(30px)';
    el.style.transition = `opacity 0.6s ease ${i * 0.1}s, transform 0.6s ease ${i * 0.1}s`;
    observer.observe(el);
  });

  // === Counter animation ===
  function animateCounter(el, target, suffix = '') {
    let current = 0;
    const increment = target / 60;
    const timer = setInterval(() => {
      current += increment;
      if (current >= target) {
        current = target;
        clearInterval(timer);
      }
      el.textContent = Math.floor(current) + suffix;
    }, 25);
  }

  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        const el = entry.target;
        const target = parseInt(el.dataset.target);
        const suffix = el.dataset.suffix || '';
        animateCounter(el, target, suffix);
        counterObserver.unobserve(el);
      }
    });
  }, { threshold: 0.5 });

  document.querySelectorAll('[data-target]').forEach(el => {
    counterObserver.observe(el);
  });

  // === Smooth form submit (contact) ===
  const contactForm = document.getElementById('contactForm');
  if (contactForm) {
    contactForm.addEventListener('submit', function (e) {
      e.preventDefault();
      const btn = this.querySelector('[type="submit"]');
      const originalText = btn.innerHTML;
      btn.innerHTML = '<i class="bi bi-check-circle me-2"></i>Message envoyé !';
      btn.style.background = '#27ae60';
      setTimeout(() => {
        btn.innerHTML = originalText;
        btn.style.background = '';
        this.reset();
      }, 3000);
    });
  }

  // === Tooltip initialization ===
  const tooltipTriggerList = document.querySelectorAll('[data-bs-toggle="tooltip"]');
  tooltipTriggerList.forEach(el => new bootstrap.Tooltip(el));

  // === Mobile navbar close on click ===
  document.querySelectorAll('.nav-link-custom').forEach(link => {
    link.addEventListener('click', () => {
      const navbarCollapse = document.querySelector('.navbar-collapse');
      if (navbarCollapse && navbarCollapse.classList.contains('show')) {
        new bootstrap.Collapse(navbarCollapse).hide();
      }
    });
  });

  // === Parallax hero subtle effect ===
  const hero = document.querySelector('.hero');
  if (hero) {
    window.addEventListener('scroll', () => {
      const scrolled = window.scrollY;
      const blobs = hero.querySelectorAll('.hero-blob');
      blobs.forEach((blob, i) => {
        const speed = i === 0 ? 0.3 : -0.2;
        blob.style.transform = `translateY(${scrolled * speed}px)`;
      });
    });
  }

});
