<?php

/**
 * Template Name: Home
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

<div class="fluid-container">

  <!-- LOOP STARTS HERE -->

  <?php $company_info = CFS()->get( 'company_info' ); 
    if($company_info):
      foreach($company_info as $info):
  ?>

    <div class="row row-content">
      <div class="col-lg-3 offset-lg-3 text-center">
              <h2><?php echo $info['title'] ?></h2>
      </div>
      <div class="col-lg-3 col-sm-10 offset-sm-1 offset-lg-0 text-sm-center text-lg-left">
              <p><?php echo $info['description'] ?></p>
      </div>
    </div>

  <?php endforeach; endif; ?>

  <!-- LOOP ENDS HERE -->

  <div class="row row-content">
    <div class="col-md-8 offset-md-2 text-center">
      <h3>
        <?php echo CFS()->get('cta_text'); ?>
      </h3>
      <button class="core-button"><?php echo CFS()->get('cta_button'); ?></button>
    </div>
    <div class="col-sm-12">
      <hr class="styled">
    </div>
  </div>
  <div class="row">
    <div class="col-sm-8 offset-sm-2 col-10 offset-1 text-center">
      <h2 class="spaced-header"> <?php echo CFS()->get('promo_video_text'); ?> </h2>
      <div class="embed-responsive embed-responsive-16by9">
        <iframe src="<?php echo str_replace("watch?v=", "embed/", CFS()->get('promo_video_link')); ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>

<style>
  .nav-link-home {
    color: #e02b20;
    cursor: auto;
  }
  .nav-link-home:hover {
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