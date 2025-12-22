// ========================================
// MOBILE MENU FUNCTIONALITY
// ========================================

document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.getElementById('mobile-menu-button');
    const closeMobileMenuButton = document.getElementById('close-mobile-menu');
    const mobileMenu = document.getElementById('mobile-menu');
    const mobileMenuOverlay = document.getElementById('mobile-menu-overlay');

    function openMobileMenu() {
        mobileMenu.classList.remove('translate-x-full');
        mobileMenu.classList.add('translate-x-0');
        mobileMenuOverlay.classList.remove('hidden');
        document.body.style.overflow = 'hidden';
    }

    function closeMobileMenu() {
        mobileMenu.classList.add('translate-x-full');
        mobileMenu.classList.remove('translate-x-0');
        mobileMenuOverlay.classList.add('hidden');
        document.body.style.overflow = '';
    }

    if (mobileMenuButton) {
        mobileMenuButton.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            openMobileMenu();
        });
    }

    if (closeMobileMenuButton) {
        closeMobileMenuButton.addEventListener('click', (e) => {
            e.preventDefault();
            e.stopPropagation();
            closeMobileMenu();
        });
    }

    if (mobileMenuOverlay) {
        mobileMenuOverlay.addEventListener('click', () => {
            closeMobileMenu();
        });
    }

    // Close mobile menu when clicking on links
    mobileMenu.querySelectorAll('a').forEach(link => {
        link.addEventListener('click', () => {
            closeMobileMenu();
        });
    });

    // ========================================
    // INTERSECTION OBSERVER FOR ANIMATIONS
    // ========================================

    const fadeSections = document.querySelectorAll('.fade-in-section');
    const observerOptions = {
        root: null,
        rootMargin: '0px',
        threshold: 0.1
    };

    const observer = new IntersectionObserver((entries, observer) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                entry.target.classList.add('is-visible');
                observer.unobserve(entry.target);
            }
        });
    }, observerOptions);

    fadeSections.forEach(section => {
        observer.observe(section);
    });

    // ========================================
    // SUPPORT WIDGET FUNCTIONALITY
    // ========================================

    const supportBtn = document.getElementById('support-btn');
    const supportOptions = document.getElementById('support-options');

    if (supportBtn && supportOptions) {
        supportBtn.addEventListener('click', () => {
            supportOptions.classList.toggle('show');
        });
    }

    // ========================================
    // HERO SECTION ANIMATIONS ON LOAD
    // ========================================

    window.addEventListener('load', () => {
        document.querySelectorAll('.stat-card, .floating').forEach(el => {
            el.style.opacity = '1';
        });
    });
});

// ========================================
// TOGGLE SUBMENU FUNCTION
// ========================================

function toggleSubMenu(button, menuId) {
    const menu = document.getElementById(menuId);
    const arrow = button.querySelector('[data-arrow-icon]');
    
    if (menu.classList.contains('hidden')) {
        menu.classList.remove('hidden');
        arrow.classList.add('rotate-180');
    } else {
        menu.classList.add('hidden');
        arrow.classList.remove('rotate-180');
    }
}

// ========================================
// SMOOTH SCROLL FOR ANCHOR LINKS
// ========================================

document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        const href = this.getAttribute('href');
        if (href !== '#') {
            e.preventDefault();
            const target = document.querySelector(href);
            if (target) {
                target.scrollIntoView({
                    behavior: 'smooth',
                    block: 'start'
                });
            }
        }
    });
});

// ========================================
// HEADER SCROLL EFFECT
// ========================================

let lastScroll = 0;
const header = document.querySelector('header');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;
    
    if (currentScroll > 100) {
        header.classList.add('shadow-lg');
    } else {
        header.classList.remove('shadow-lg');
    }
    
    lastScroll = currentScroll;
});