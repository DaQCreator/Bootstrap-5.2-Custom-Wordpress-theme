<!-- Main content -->
<footer class="main-footer glass-bg text-dark pt-5 pb-5">
  <div class="container">
    <div class="row">
      <?php if ( is_active_sidebar( 'footer_widgets' ) ) : ?>
        <?php dynamic_sidebar( 'footer_widgets' ); ?>
      <?php endif; ?>
    </div>
  </div>
</footer>
<!-- Copy -->
<div class="copy glass-bg pt-3 pb-3 border-top">
  <div class="cointainer">
    <div class="row m-0">
      <div class="col text-center">
        <p class="small m-0 text-dark">Copyright &copy; DaQCreator <?php echo date('Y'); ?>. All Rights Reserved</p>
      </div>
    </div>
  </div>
</div>
<!-- Pricing Modal -->
<div class="modal fade" id="pricingModal" tabindex="-1" aria-labelledby="examplePricingModal" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content glass-bg">
      <div class="modal-header">
        <h5 class="modal-title" id="examplePricingModal">Formularz wyceny</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <?php if ( is_active_sidebar( 'pricing-pop-up' ) ) : ?>
          <?php dynamic_sidebar( 'pricing-pop-up' ); ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</div>

<?php wp_footer(); ?>
  </body>
</html>
