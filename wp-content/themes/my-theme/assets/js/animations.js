// Text Animation for Development Cards
document.addEventListener('DOMContentLoaded', function() {
    // Intersection Observer for triggering animations
    const observerOptions = {
        threshold: 0.3,
        rootMargin: '0px 0px -50px 0px'
    };

    const observer = new IntersectionObserver(function(entries) {
        entries.forEach(entry => {
            if (entry.isIntersecting) {
                const card = entry.target;
                const animatedElements = card.querySelectorAll('.animate-text');
                
                // Add animated class to trigger any additional effects
                animatedElements.forEach((el, index) => {
                    setTimeout(() => {
                        el.classList.add('animated');
                    }, (index + 1) * 150);
                });
                
                // Stop observing after animation
                observer.unobserve(card);
            }
        });
    }, observerOptions);

    // Observe all development cards
    const developmentCards = document.querySelectorAll('.development-card');
    developmentCards.forEach(card => {
        observer.observe(card);
    });

    // Header scroll effect
    const header = document.querySelector('.site-header');
    if (header) {
        window.addEventListener('scroll', function() {
            if (window.scrollY > 100) {
                header.classList.add('scrolled');
            } else {
                header.classList.remove('scrolled');
            }
        });
    }

    // Smooth scrolling for anchor links
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
}); 