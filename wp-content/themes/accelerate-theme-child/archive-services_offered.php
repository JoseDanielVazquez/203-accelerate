<?php
/**
 * The template for displaying the about us page
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site will use a
 * different template.
 *
 * @package WordPress
 * @subpackage Accelerate Marketing
 * @since Accelerate Marketing 2.0
 */

get_header(); ?>

<div id="primary" class="about-page about-hero-content">
    <div class="main-content" role="main">
        <h3>Accelerate is a strategy and marketing agency located in the heart of NYC. Our goal is to build businesses by making our clients visible and making their customers smile.</h3>
    </div><!-- .main-content -->
</div><!-- #primary -->

<section class="services-list">
    <div class="about-services">
        <h5>Our Services</h5>
        <p>We take pride in our clients and the content we create for them. Here's a brief overview of our offered services.</p>
    </div>
    
    <?php while ( have_posts() ) : the_post();
        $service_title = get_field('service_title');
        $icon = get_field('icon');
        $full_size = "full";
    ?>
    <article class="services-offered">
        <div class="services-offered-images">
            <?php if($icon) {
                echo wp_get_attachment_image( $icon, $full_size );
            } ?>
        </div>
        <aside class="services-offered-text">
            <h2><?php the_title(); ?></h2>
            <?php the_content(); ?>
        </aside>
    </article>
    <?php endwhile; // end of the loop. ?>
</section>

<section class="contact-link-section clearfix">
    <div class="call-to-action">
        <h4>Interested in working with us?</h4>
        <a class="button" href="<?php echo site_url('/contact-us/') ?>">Contact Us</a>
    </div>
</section>

<?php get_footer(); ?>
