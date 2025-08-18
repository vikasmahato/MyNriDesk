// Text Animation for Development Cards
console.log('Animations.js loaded successfully!');

document.addEventListener('DOMContentLoaded', function() {
    console.log('DOM Content Loaded event fired');
    // Force service cards to be visible
    const serviceCards = document.querySelectorAll('.service-card');
    serviceCards.forEach(card => {
        card.style.opacity = '1';
        card.style.transform = 'translateY(0)';
        card.style.visibility = 'visible';
        card.style.display = 'block';
    });

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
        console.log('Header element found:', header);
        
        window.addEventListener('scroll', function() {
            const scrollY = window.scrollY;
            console.log('Scroll position:', scrollY);
            
            if (scrollY > 100) {
                header.classList.add('scrolled');
                console.log('Added scrolled class');
            } else {
                header.classList.remove('scrolled');
                console.log('Removed scrolled class');
            }
        });
        
        // Test the scrolled class immediately
        setTimeout(() => {
            header.classList.add('scrolled');
            console.log('Test: Added scrolled class');
            setTimeout(() => {
                header.classList.remove('scrolled');
                console.log('Test: Removed scrolled class');
            }, 2000);
        }, 1000);
    } else {
        console.log('Header element NOT found!');
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

    // Debug: Log what we found
    console.log('Service cards found:', serviceCards.length);
    console.log('Development cards found:', developmentCards.length);
}); 