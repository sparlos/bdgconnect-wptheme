<?php
/**
 * Template Name: About Us
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
   <div class="row row-content">
      <div class="col-md-8 offset-md-2">
          
          <?php echo CFS()->get('about_us_description'); ?>
          
      </div>
      <div class="col-sm-12">
         <hr class="styled">
      </div>
   </div>

   <!-- FOR EACH STARTS HERE BAYBEEEEEE -->
    <div class="row">
        <div class="col-md-8 offset-md-2 text-center">
            <h2 class="spaced-header">OUR TEAM </h2>
        </div>
    </div>
    <?php $members = CFS()->get( 'team_members' ); 
        $count = 0;
    ?>
    <div class="row">
    <?php if($members): ?>
        <?php foreach($members as $member): ?>
            <div class="col-10 offset-1 col-lg-4 <?php echo (++$count%2 ? 'offset-lg-2' : 'offset-lg-0') ?> card-col">
                <div class="card text-center">
                    <img class="card-img-top" src="<?php echo $member['image']?>" alt="Card image cap">
                    <div class="card-body">
                    <h5 class="card-title"><?php echo $member['name']?></h5>
                    <p class="card-text"><?php echo $member['description']?></p>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    <?php endif ?>
    </div>

    <!-- LOOP ENDS HERE -->

</div>

<style>
   .nav-link-about {
   color: #e02b20;
   cursor: auto;
   }
   .nav-link-about:hover {
   color: #e02b20;
   }
</style>
<?php get_footer(); ?>