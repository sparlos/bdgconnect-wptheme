<?php

/**
 * Template Name: Video Submission
 *
 */

?>


<?php get_header(); ?>
  
  <div class="row">
    <div class="col-xs-12 col-md-8 offset-md-2 text-center">
    <div class="hero__text">
        <h1 data-aos="fade-up" data-aos-duration="1000">
            <?php echo CFS()->get('heading_text'); ?>
         </h1>
        <h3 data-aos="fade-up" data-aos-duration="1000" class="subheading">
            <?php echo CFS()->get('subheading_text'); ?>
         </h3>
      </div>
    </div>
  </div>
</div>

<div class="fluid-container" style="margin-bottom: 200px">
  
  <div class="row row-content">
    <div class="col-md-6 offset-md-3 text-center">
      <h2><?php echo CFS()->get('cta_heading'); ?></h2>
    </div>
  </div>
  <div class="row">
    <div class="col-md-6 offset-md-3 text-center">
      <hr class="styled">
    </div>
  </div>
  <div class="row spaced-header-big">
    <div class="col-10 offset-1 col-lg-4 offset-lg-2 text-center">
      <h5><?php echo CFS()->get('left_column_header'); ?></h5>
      <p><?php echo CFS()->get('left_column_subheading'); ?></p>
      <img class="img-fluid" src="<?php echo CFS()->get('left_column_image'); ?>" alt="">
    </div>
    <div class="col-lg-4 offset-lg-0 col-sm-10 offset-sm-1">
      <?php echo do_shortcode(CFS()->get('form_shortcode')); ?>   
    </div>
  </div>

</div>




<style>
  .nav-link-video {
    color: #e02b20;
    cursor: auto;
  }
  .nav-link-video:hover {
    color: #e02b20;
  }
  
  .hero {
    background-image: 
      linear-gradient(
        to right,
        rgba(0, 0, 0, 0.75), 
        rgba(0, 0, 0, 0.75)
      ),
      url("<?php echo CFS()->get('background_image'); ?>");
  }
</style>

<?php get_footer(); ?>