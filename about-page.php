<?php 

/**
 * Template Name: About Page
 */

get_header(); ?>

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>

<!-- Custom Header -->
<header class="custom-page-header pt-5 pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <div class="page-title-heading small">
          <h1 class="fw-600"><?php echo get_the_title(); ?></h1>
          <p><?php the_content(); ?></p>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
      <?php 
        if ( has_post_thumbnail() ) { ?>
          <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
        <?php }else{ ?>
          <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/Assets/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
        <?php }
      ?>
      </div>
    </div>
  </div>
</header>
<!-- Custom Page Content -->
<!-- First container -->
<section class="section-three pt-5 pb-5 border-top">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <div class="who-we-are-image">
          <img class="img-fluid rounded" src="<?php echo the_field('who_we_are_image') ?>" alt="Who we are">
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="who-we-are-text small glass-bg p-3 rounded border">
          <?php echo the_field('who_we_are'); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Second container -->
<section class="section-three pt-5 pb-5 border-top">
  <div class="container">
    <div class="row align-items-center">
    <div class="col-lg-6 col-md-6">
        <div class="what-we-do-text small glass-bg p-3 rounded border">
          <?php echo the_field('what_we_do'); ?>
        </div>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="what-we-do-image">
          <img class="img-fluid rounded" src="<?php echo the_field('what_we_do_image') ?>" alt="What we do">
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Dynamic Services -->
<section class="services border-top pt-5 pb-5">
  <div class="container">
    <div class="row justify-content-center">
    <div class="col-lg-6 col-md-6">
        <div class="project_cat_text text-center small">
          <?php if ( is_active_sidebar( 'services_text' ) ) : ?>
            <?php dynamic_sidebar( 'services_text' ); ?>
          <?php endif; ?>
          <a data-bs-toggle="modal" data-bs-target="#pricingModal" href="#" class="btn btn-md btn-success"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
            <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
            <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
            <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
            <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
          </svg> Wyceń projekt</a>
        </div>
      </div>
    </div>
  </div>
</section>

<?php endwhile; else : ?>
  <p><?php esc_html_e( 'Nie znaleziono wpisów.' ); ?></p>
<?php endif; ?>

<?php get_footer(); ?>