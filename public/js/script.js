// ========== SCROLL ANIMATIONS ==========
document.addEventListener('DOMContentLoaded', () => {
    // Create Intersection Observer
    const observerOptions = {
        threshold: 0.15,
        rootMargin: '0px 0px -100px 0px'
    };

    const scrollObserver = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                // Simply add visible class - CSS handles the rest
                entry.target.classList.add('visible');
                // Stop observing after animation triggers
                scrollObserver.unobserve(entry.target);
            }
        });
    }, observerOptions);

    // Observe all elements with fade-in-on-scroll class
    const animatedElements = document.querySelectorAll('.fade-in-on-scroll');
    animatedElements.forEach(element => {
        scrollObserver.observe(element);
    });
});

// ========== SMOOTH SCROLL FOR ANCHOR LINKS ==========
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });
        }
    });
});

// ========== PARALLAX EFFECT FOR FLOATING ELEMENTS ==========
window.addEventListener('scroll', () => {
    const scrolled = window.pageYOffset;
    const parallaxElements = document.querySelectorAll('.float');

    parallaxElements.forEach((el, index) => {
        const speed = 0.2 + (index * 0.03);
        const yPos = -(scrolled * speed);
        el.style.transform = `translate3d(0, ${yPos}px, 0)`;
    });
});

// ========== MOBILE MENU TOGGLE ==========
document.addEventListener('DOMContentLoaded', () => {
    const mobileMenuButton = document.querySelector('.mobile-menu-button');
    const mobileMenu = document.querySelector('.md\\:hidden.nav-menu');

    if (mobileMenuButton && mobileMenu) {
        mobileMenuButton.addEventListener('click', () => {
            mobileMenuButton.classList.toggle('active');
            mobileMenu.classList.toggle('active');

            // Update ARIA
            const isExpanded = mobileMenu.classList.contains('active');
            mobileMenuButton.setAttribute('aria-expanded', isExpanded);
            mobileMenuButton.setAttribute('aria-label', isExpanded ? 'إغلاق القائمة' : 'فتح القائمة');
        });

        // Close menu when clicking a link
        const mobileLinks = mobileMenu.querySelectorAll('.nav-link');
        mobileLinks.forEach(link => {
            link.addEventListener('click', () => {
                mobileMenuButton.classList.remove('active');
                mobileMenu.classList.remove('active');
                mobileMenuButton.setAttribute('aria-expanded', 'false');
                mobileMenuButton.setAttribute('aria-label', 'فتح القائمة');
            });
        });
    }
});

// ========== NAVBAR SCROLL EFFECT ==========
let lastScroll = 0;
const navbar = document.querySelector('.navbar');

window.addEventListener('scroll', () => {
    const currentScroll = window.pageYOffset;

    if (currentScroll > 50) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }

    lastScroll = currentScroll;
});

// ========== ACTIVE LINK ON SCROLL ==========
const sections = document.querySelectorAll('section[id]');
const navLinks = document.querySelectorAll('.nav-link');

function activateNavLink() {
    let current = '';
    const scrollPosition = window.pageYOffset + 100;

    sections.forEach(section => {
        const sectionTop = section.offsetTop;
        const sectionHeight = section.clientHeight;

        if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
            current = section.getAttribute('id');
        }
    });

    navLinks.forEach(link => {
        link.classList.remove('active');
        const linkSection = link.getAttribute('data-section');

        if (linkSection === current ||
            (current === '' && linkSection === 'hero') ||
            (current === 'main-content' && linkSection === 'hero')) {
            link.classList.add('active');
        }
    });
}

window.addEventListener('scroll', activateNavLink);
window.addEventListener('load', activateNavLink);

// ========== COPY TO CLIPBOARD FUNCTION ==========
window.copyToClipboard = function(text, button) {
    navigator.clipboard.writeText(text).then(() => {
        // Visual feedback
        const originalText = button.textContent;
        button.textContent = '✓ تم النسخ';
        button.classList.add('bg-[#61ce5b]', 'text-white');
        button.classList.remove('bg-gray-100');

        // Reset after 2 seconds
        setTimeout(() => {
            button.textContent = originalText;
            button.classList.remove('bg-[#61ce5b]', 'text-white');
            button.classList.add('bg-gray-100');
        }, 2000);
    }).catch(err => {
        console.error('Failed to copy:', err);
        button.textContent = 'فشل النسخ';
        setTimeout(() => {
            button.textContent = 'نسخ';
        }, 2000);
    });
};
