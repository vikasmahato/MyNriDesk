<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video.mp4?v=<?php echo time(); ?>" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video.webm?v=<?php echo time(); ?>" type="video/webm">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">We solve business problems<br>and amplify growth</h1>
            <p class="hero-subtitle">We solve business challenges and drive growth through strategic consulting and digital solutions.</p>
            <a href="#contact" class="hero-cta">Get Started</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section id="services" class="services-section">
    <div class="container">
        <h2 class="section-title">Our Services</h2>
        <div class="services-grid">
            <div class="service-card fade-in">
                <div class="service-icon">📊</div>
                <h3 class="service-title">Tax Planning & Compliance</h3>
                <p class="service-description">Strategic tax planning, compliance services, and optimization strategies to minimize your tax burden while ensuring full regulatory compliance.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">💼</div>
                <h3 class="service-title">Business Advisory & Corporate Services</h3>
                <p class="service-description">Comprehensive business strategy, growth planning, corporate formation, restructuring, and operational optimization to drive sustainable business success.</p>
            </div>

            <div class="service-card fade-in">
                <div class="service-icon">📈</div>
                <h3 class="service-title">Financial Planning</h3>
                <p class="service-description">Personal and business financial planning, investment strategies, and wealth management solutions for long-term financial security.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">⚖️</div>
                <h3 class="service-title">Regulatory Compliance</h3>
                <p class="service-description">Stay compliant with ever-changing regulations through our comprehensive compliance monitoring and advisory services.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">💻</div>
                <h3 class="service-title">Web Development</h3>
                <p class="service-description">Custom website development, e-commerce solutions, and web applications tailored to your business needs and goals.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">📱</div>
                <h3 class="service-title">App Development</h3>
                <p class="service-description">Mobile and desktop application development for iOS, Android, and cross-platform solutions to enhance your digital presence.</p>
            </div>
        </div>
    </div>
</section>

<!-- Development Services Section -->
<section id="digital-solutions" class="development-services-section">
    <div class="container">
        <div class="development-header">
            <h2 class="section-title">Digital Solutions</h2>
            <p class="section-subtitle">Transform your business with cutting-edge digital solutions that drive growth and innovation</p>
        </div>
        <div class="development-grid">
            <div class="development-card fade-in web-dev-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/web-development-bg.jpg');">
                <div class="card-overlay"></div>
                <div class="card-content">
                    <div class="development-icon">🌐</div>
                    <div class="card-badge">Most Popular</div>
                    <h3 class="animate-text">Web Development</h3>
                    <p class="card-intro animate-text">Create stunning, high-performance websites that convert visitors into customers</p>
                    <ul class="animate-text">
                        <li><span class="feature-icon">✨</span>Custom Website Design & Development</li>
                        <li><span class="feature-icon">🛒</span>E-commerce Solutions</li>
                        <li><span class="feature-icon">⚡</span>Web Applications</li>
                        <li><span class="feature-icon">📝</span>Content Management Systems</li>
                        <li><span class="feature-icon">🔍</span>SEO Optimization</li>
                    </ul>
                    <div class="card-features animate-text">
                        <span class="feature-tag">Responsive Design</span>
                        <span class="feature-tag">Fast Loading</span>
                        <span class="feature-tag">SEO Ready</span>
                    </div>
                    <a href="#contact" class="development-cta animate-text">Discuss Your Project</a>
                </div>
            </div>
            <div class="development-card fade-in app-dev-card" style="background-image: url('<?php echo get_template_directory_uri(); ?>/assets/images/app-development-bg.jpg');">
                <div class="card-overlay"></div>
                <div class="card-content">
                    <div class="development-icon">📱</div>
                    <div class="card-badge">Trending</div>
                    <h3 class="animate-text">App Development</h3>
                    <p class="card-intro animate-text">Build powerful mobile applications that engage users and drive business growth</p>
                    <ul class="animate-text">
                        <li><span class="feature-icon">🍎</span>iOS & Android Applications</li>
                        <li><span class="feature-icon">🔄</span>Cross-Platform Solutions</li>
                        <li><span class="feature-icon">💼</span>Custom Business Apps</li>
                        <li><span class="feature-icon">🔧</span>App Maintenance & Updates</li>
                        <li><span class="feature-icon">🚀</span>Performance Optimization</li>
                    </ul>
                    <div class="card-features animate-text">
                        <span class="feature-tag">Native Performance</span>
                        <span class="feature-tag">User-Friendly</span>
                        <span class="feature-tag">Scalable</span>
                    </div>
                    <a href="#contact" class="development-cta animate-text">Start Building</a>
                </div>
            </div>
        </div>
        <div class="development-cta-section">
            <h3>Ready to Go Digital?</h3>
            <p>Let's discuss how we can transform your business with innovative digital solutions</p>
            <a href="#contact" class="main-cta-button">Get Free Consultation</a>
        </div>
    </div>
</section>

<!-- About Section -->
<section id="about" class="about-section">
    <div class="container">
        <div class="about-content">
            <div class="about-text">
                <h2>Bringing Your Whole Self to Work</h2>
                <p>Whether you are just beginning your career or you are looking for new challenges, it is important to look for an organization that will help you grow personally and professionally: develop your knowledge and talent, explore new directions, and make an impact through your work -- both at your company and for your clients.</p>
                <p>We focus on results rather than delivering just good looking presentations and complex reports. We like to keep it simple and straight.</p>
                <a href="#contact" class="cta-button">Learn More</a>
            </div>
            <div class="about-image">
                <?php 
                $about_image = get_template_directory_uri() . '/assets/about-image.jpg';
                if (file_exists(get_template_directory() . '/assets/about-image.jpg')) {
                    echo '<img src="' . esc_url($about_image) . '" alt="Professional team working together">';
                } else {
                    echo '<div class="placeholder-image">
                            <div class="placeholder-content">
                                <span class="placeholder-icon">👥</span>
                                <p>Professional Team</p>
                            </div>
                          </div>';
                }
                ?>
            </div>
        </div>
    </div>
</section>

<!-- CTA Section -->
<section class="cta-section">
    <div class="container">
        <h2 class="cta-title">Ready to Transform Your Business?</h2>
        <p class="cta-description">Let's discuss how we can help you achieve your business goals, drive sustainable growth, and establish a powerful digital presence through our consulting and development services.</p>
        <div class="cta-buttons">
            <a href="#contact" class="cta-button">Schedule a Consultation</a>
            <a href="#contact" class="cta-button secondary">Discuss Development Project</a>
        </div>
    </div>
</section>

<!-- Contact Section -->
<section id="contact" class="contact-section">
    <div class="container">
        <h2 class="section-title">Get In Touch</h2>
        <p class="section-subtitle">Ready to start your journey? Let's discuss how we can help you achieve your goals.</p>
        <div class="contact-content">
            <div class="contact-info">
                <div class="contact-item">
                    <div class="contact-icon">📧</div>
                    <div class="contact-details">
                        <h3>Email Us</h3>
                        <p>mynridesk@hotmail.com</p>
                    </div>
                </div>
                <div class="contact-item">
                    <div class="contact-icon">📞</div>
                    <div class="contact-details">
                        <h3>Call Us</h3>
                        <p>+91 78384 17380</p>
                    </div>
                </div>
            </div>
            <div class="contact-form">
                <form>
                    <div class="form-group">
                        <input type="text" placeholder="Your Name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" placeholder="Your Email" required>
                    </div>
                    <div class="form-group">
                        <input type="text" placeholder="Subject">
                    </div>
                    <div class="form-group">
                        <textarea placeholder="Your Message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="submit-btn">Send Message</button>
                </form>
            </div>
        </div>
    </div>
</section>

<!-- Footer -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3>Professional Advisory Services</h3>
                <p>We provide comprehensive business consulting, tax planning, and digital solutions to help organizations thrive in today's dynamic market.</p>
                <div class="footer-contact">
                    <p><strong>Email:</strong> mynridesk@hotmail.com</p>
                    <p><strong>Phone:</strong> +91 78384 17380</p>
                </div>
            </div>
            
            <div class="footer-section">
                <h3>Our Services</h3>
                <ul>
                    <li><a href="#services">Tax Planning & Compliance</a></li>
                    <li><a href="#services">Business Advisory & Corporate Services</a></li>
                    <li><a href="#services">Financial Planning</a></li>
                    <li><a href="#services">Regulatory Compliance</a></li>
                    <li><a href="#digital-solutions">Web Development</a></li>
                    <li><a href="#digital-solutions">App Development</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Quick Links</h3>
                <ul>
                    <li><a href="#services">Services</a></li>
                    <li><a href="#digital-solutions">Digital Solutions</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h3>Get Started</h3>
                <p>Ready to transform your business? Let's discuss how we can help you achieve your goals.</p>
                <a href="#contact" class="footer-cta">Contact Us Today</a>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; <?php echo date('Y'); ?> Professional Advisory Services. All rights reserved.</p>
        </div>
    </div>
</footer> 