<?php 
/**
 * Template Name: Front Page
 */

get_header(); ?>
<!-- Banner -->
<header class="main-header pt-5 pb-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <?php if ( is_active_sidebar( 'front_page_banner_text' ) ) : ?>
          <?php dynamic_sidebar( 'front_page_banner_text' ); ?>
        <?php endif; ?>
        <a data-bs-toggle="modal" data-bs-target="#pricingModal" href="#" class="btn btn-lg btn-success bg-animated-custom"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-cash-coin" viewBox="0 0 16 16">
          <path fill-rule="evenodd" d="M11 15a4 4 0 1 0 0-8 4 4 0 0 0 0 8zm5-4a5 5 0 1 1-10 0 5 5 0 0 1 10 0z"/>
          <path d="M9.438 11.944c.047.596.518 1.06 1.363 1.116v.44h.375v-.443c.875-.061 1.386-.529 1.386-1.207 0-.618-.39-.936-1.09-1.1l-.296-.07v-1.2c.376.043.614.248.671.532h.658c-.047-.575-.54-1.024-1.329-1.073V8.5h-.375v.45c-.747.073-1.255.522-1.255 1.158 0 .562.378.92 1.007 1.066l.248.061v1.272c-.384-.058-.639-.27-.696-.563h-.668zm1.36-1.354c-.369-.085-.569-.26-.569-.522 0-.294.216-.514.572-.578v1.1h-.003zm.432.746c.449.104.655.272.655.569 0 .339-.257.571-.709.614v-1.195l.054.012z"/>
          <path d="M1 0a1 1 0 0 0-1 1v8a1 1 0 0 0 1 1h4.083c.058-.344.145-.678.258-1H3a2 2 0 0 0-2-2V3a2 2 0 0 0 2-2h10a2 2 0 0 0 2 2v3.528c.38.34.717.728 1 1.154V1a1 1 0 0 0-1-1H1z"/>
          <path d="M9.998 5.083 10 5a2 2 0 1 0-3.132 1.65 5.982 5.982 0 0 1 3.13-1.567z"/>
        </svg> Wyceń projekt</a>
      </div>
      <div class="col-lg-6 col-md-6 banner_custom_image">
        <?php if ( is_active_sidebar( 'front_page_banner_image' ) ) : ?>
          <?php dynamic_sidebar( 'front_page_banner_image' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</header>
<!-- Features -->
<section class="features pt-5 pb-5">
  <div class="container">
    <div class="row">
      <div class="col-lg-3 col-md-3">
        <div class="d-flex align-items-center feature_holder small glass-bg border rounded mb-5 px-1">
          <div class="flex-grow-1 mx-2">
             <?php echo the_field('feature_text_one') ?>
            <div class="flex-shrink-1">
              <img class="img-fluid" src="<?php echo the_field('feature_image_one'); ?>" alt="Featured text">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="d-flex align-items-center feature_holder small glass-bg border rounded mb-5 px-1">
          <div class="flex-grow-1 mx-2">
            <?php echo the_field('feature_text_two') ?>
            <div class="flex-shrink-1">
              <img class="img-fluid" src="<?php echo the_field('feature_image_two'); ?>" alt="Featured text">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="d-flex align-items-center feature_holder small glass-bg border rounded mb-5 px-1">
          <div class="flex-grow-1 mx-2">
            <?php echo the_field('feature_text_three') ?>
            <div class="flex-shrink-1">
              <img class="img-fluid" src="<?php echo the_field('feature_image_three'); ?>" alt="Featured text">
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-3 col-md-3">
        <div class="d-flex align-items-center feature_holder small glass-bg border rounded mb-5 px-1">
          <div class="flex-grow-1 mx-2">
            <?php echo the_field('feature_text_four') ?>
            <div class="flex-shrink-1">
              <img class="img-fluid" src="<?php echo the_field('feature_image_four'); ?>" alt="Featured text">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- Projects category -->
<section class="project_cat border-top pt-5 pb-5">
  <div class="container">
    <div class="row d=flex justify-content-center">
      <div class="col-lg-6 col-md-6">
        <div class="project_cat_text text-center small">
          <?php if ( is_active_sidebar( 'project_cat_text' ) ) : ?>
            <?php dynamic_sidebar( 'project_cat_text' ); ?>
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
    <div class="row mt-5">
      <div class="col-lg-3 col-md-3">
        <a href="<?php echo bloginfo('url'); ?>/oferta/" class="card glass-bg border rounded text-decoration-none text-dark text-center mb-3">
          <img class="img-fluid p-2" src="<?php echo get_template_directory_uri()  ?>/assets/img/daqcreator-stack.png" alt="">
          <div class="card-body border-top">
            <h3 class="m-0 fs-5 fw-600">Wybrane technologie</h3>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-3">
        <a href="<?php echo bloginfo('url'); ?>/oferta/" class="card glass-bg border rounded text-decoration-none text-dark text-center mb-3">
          <img class="img-fluid p-2" src="<?php echo get_template_directory_uri()  ?>/assets/img/strony-internetowe-programista-daqcreator.png" alt="">
          <div class="card-body border-top">
            <h3 class="m-0 fs-5 fw-600">Programowanko</h3>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-3">
        <a href="<?php echo bloginfo('url'); ?>/oferta/" class="card glass-bg border rounded text-decoration-none text-dark text-center mb-3">
          <img class="img-fluid p-2" src="<?php echo get_template_directory_uri()  ?>/assets/img/ui-ux-daqcreator.png" alt="">
          <div class="card-body border-top">
            <h3 class="m-0 fs-5 fw-600">UI/UX</h3>
          </div>
        </a>
      </div>
      <div class="col-lg-3 col-md-3">
        <a href="<?php echo bloginfo('url'); ?>/oferta/" class="card glass-bg border rounded text-decoration-none text-dark text-center mb-3">
          <img class="img-fluid p-2" src="<?php echo get_template_directory_uri()  ?>/assets/img/mobile-first-daqcreator.png" alt="">
          <div class="card-body border-top">
            <h3 class="m-0 fs-5 fw-600">Mobile First</h3>
          </div>
        </a>
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
<!-- Main content -->
<section class="main-content pb-5 pt-5">
  <div class="container">
    <div class="row align-items-center">
      <div class="col-lg-6 col-md-6">
        <?php 
          if ( has_post_thumbnail() ) { ?>
            <img class="img-fluid rounded" src="<?php echo get_the_post_thumbnail_url(); ?>" alt="<?php echo get_the_title(); ?>">
          <?php }else{ ?>
            <img class="img-fluid rounded" src="<?php echo get_template_directory_uri(); ?>/Assets/img/Placeholder.jpg" alt="<?php echo get_the_title(); ?>">
          <?php }
        ?>
      </div>
      <div class="col-lg-6 col-md-6">
        <div class="content-area">
          <?php the_content(); ?>
        </div>
      </div>
    </div>
  </div>
</section>


<?php get_footer(); ?>


