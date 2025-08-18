    <footer id="colophon" class="site-footer">
        <div class="container">
            <div class="footer-content">
                <div class="footer-section">
                    <h3>About Us</h3>
                    <p>We are a management consulting firm which supports organizations in addressing business challenges and enabling sustainable growth.</p>
                </div>
                
                <div class="footer-section">
                    <h3>Our Services</h3>
                    <ul>
                        <li><a href="#services">Tax Planning & Compliance</a></li>
                        <li><a href="#services">Business Advisory</a></li>
                        <li><a href="#services">Audit & Assurance</a></li>
                        <li><a href="#services">Financial Planning</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Industries</h3>
                    <ul>
                        <li><a href="#industries">Financial Services</a></li>
                        <li><a href="#industries">Healthcare</a></li>
                        <li><a href="#industries">Technology</a></li>
                        <li><a href="#industries">Manufacturing</a></li>
                    </ul>
                </div>
                
                <div class="footer-section">
                    <h3>Contact Info</h3>
                    <ul>
                        <li>contact@yourcompany.com</li>
                        <li>+1 (555) 123-4567</li>
                        <li>123 Business Ave, Suite 100<br>City, State 12345</li>
                    </ul>
                </div>
            </div>
            
            <div class="footer-bottom">
                <p>&copy; <?php echo date('Y'); ?> <?php bloginfo('name'); ?>. All rights reserved.</p>
            </div>
        </div>
    </footer>
</div><!-- #page -->

<?php wp_footer(); ?>

<script>
// Header scroll effect
window.addEventListener('scroll', function() {
    const header = document.querySelector('.site-header');
    if (window.scrollY > 100) {
        header.classList.add('scrolled');
    } else {
        header.classList.remove('scrolled');
    }
});

// Fade in animation
const observerOptions = {
    threshold: 0.1,
    rootMargin: '0px 0px -50px 0px'
};

const observer = new IntersectionObserver(function(entries) {
    entries.forEach(entry => {
        if (entry.isIntersecting) {
            entry.target.classList.add('visible');
        }
    });
}, observerOptions);

document.querySelectorAll('.fade-in').forEach(el => {
    observer.observe(el);
});
</script>

</body>
</html> 