<?php

/**
 * Template Name: FAQ
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

<div class="fluid-container expandable-cards">

  <div class="row row-content">
    <div class="col-10 offset-1 col-md-8 offset-md-2 text-left">
      <div id="accordion">

      <!-- LOOP STARTS HERE -->
      <?php $questions = CFS()->get( 'questions' );
        if($questions):
            foreach($questions as $count=>$question):
        ?>
  <div class="card">
    <div class="card-header" id="heading<?php echo $count?>">
      <h5 class="mb-0">
        <button class="btn btn-link <?php echo ($count == 0) ? 'btn__active' : '' ?>" data-toggle="collapse" data-target="#collapse<?php echo $count?>" aria-expanded="true" aria-controls="collapse<?php echo $count?>">
            <?php echo $question['question']; ?>
          <i class="fas fa-minus"></i> 
        </button>
      </h5>
    </div>

    <div id="collapse<?php echo $count?>" class="collapse <?php echo ($count == 0) ? 'show' : '' ?>" aria-labelledby="heading<?php echo $count?>" data-parent="#accordion">
      <div class="card-body">
        <?php echo $question['answer']; ?>
      </div>
    </div>
  </div>

  <?php endforeach; endif; ?>

  <!-- LOOP ENDS HERE -->
  </div>
</div>
    </div>
  </div>
    <div class="row">
    <hr class="styled">
  </div>
  
  <div class="row spaced-header-big">
    <div class="col-md-8 offset-md-2 text-center">
      <h3>
        <?php echo CFS()->get('cta_heading'); ?>
      </h3>
      <button class="core-button">
       <?php echo CFS()->get('cta_button_text'); ?>
      </button>
    </div>
  </div>
  
</div>



<style>
  .nav-link-faq {
    color: #e02b20;
    cursor: auto;
  }
  .nav-link-faq:hover {
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