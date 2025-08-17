<?php get_header(); ?>

<!-- Hero Section -->
<section class="hero-section">
    <video class="hero-video" autoplay muted loop playsinline>
        <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video.mp4" type="video/mp4">
        <source src="<?php echo get_template_directory_uri(); ?>/assets/hero-video.webm" type="video/webm">
        Your browser does not support the video tag.
    </video>
    <div class="container">
        <div class="hero-content">
            <h1 class="hero-title">We solve business problems<br>and amplify growth</h1>
            <p class="hero-subtitle">We are a management consulting firm which supports organizations in addressing business challenges and enabling sustainable growth.</p>
            <a href="#contact" class="hero-cta">Get Started</a>
        </div>
    </div>
</section>

<!-- Services Section -->
<section class="services-section">
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
                <h3 class="service-title">Business Advisory</h3>
                <p class="service-description">Comprehensive business strategy, growth planning, and operational optimization to drive sustainable business success.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">🔍</div>
                <h3 class="service-title">Audit & Assurance</h3>
                <p class="service-description">Independent audit services, internal control evaluation, and risk assessment to ensure financial integrity and compliance.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">📈</div>
                <h3 class="service-title">Financial Planning</h3>
                <p class="service-description">Personal and business financial planning, investment strategies, and wealth management solutions for long-term financial security.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">🏢</div>
                <h3 class="service-title">Corporate Services</h3>
                <p class="service-description">Business formation, corporate restructuring, and ongoing corporate compliance services for businesses of all sizes.</p>
            </div>
            <div class="service-card fade-in">
                <div class="service-icon">⚖️</div>
                <h3 class="service-title">Regulatory Compliance</h3>
                <p class="service-description">Stay compliant with ever-changing regulations through our comprehensive compliance monitoring and advisory services.</p>
            </div>
        </div>
    </div>
</section>

<!-- About Section -->
<section class="about-section">
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
        <p class="cta-description">Let's discuss how we can help you achieve your business goals and drive sustainable growth.</p>
        <a href="#contact" class="cta-button">Schedule a Consultation</a>
    </div>
</section>

<!-- Main Content Section -->
<main class="site-main">
    <div class="container">
        <?php if (have_posts()) : ?>
            <section class="blog-section">
                <h2 class="section-title">Latest Insights</h2>
                <div class="blog-grid">
                    <?php while (have_posts()) : the_post(); ?>
                        <article id="post-<?php the_ID(); ?>" <?php post_class('blog-card fade-in'); ?>>
                            <header class="entry-header">
                                <h3 class="entry-title">
                                    <a href="<?php the_permalink(); ?>"><?php the_title(); ?></a>
                                </h3>
                                <div class="entry-meta">
                                    <span class="posted-on">
                                        Posted on <?php echo get_the_date(); ?>
                                    </span>
                                    <span class="byline">
                                        by <?php the_author(); ?>
                                    </span>
                                </div>
                            </header>
                            
                            <div class="entry-summary">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <footer class="entry-footer">
                                <a href="<?php the_permalink(); ?>" class="read-more">Read More →</a>
                            </footer>
                        </article>
                    <?php endwhile; ?>
                </div>
                
                <?php the_posts_navigation(); ?>
                
            </section>
            
        <?php else : ?>
            <article class="no-posts">
                <h1>No posts found</h1>
                <p>It looks like nothing was found at this location.</p>
            </article>
        <?php endif; ?>
    </div>
</main>

<?php get_footer(); ?> 