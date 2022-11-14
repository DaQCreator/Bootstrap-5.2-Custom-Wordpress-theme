<?php 

/**
 * Template Name: Contact Page
 */

get_header(); ?>

<section class="contact-main-content">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 col-md-4">
                <?php if ( is_active_sidebar( 'contact_form' ) ) : ?>
                    <?php dynamic_sidebar( 'contact_form' ); ?>
                <?php endif; ?>
            </div>
            <div class="col-lg-8 col-md-8">
                
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>