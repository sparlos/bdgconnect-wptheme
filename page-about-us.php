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
         <h1 data-aos="fade-up" data-aos-duration="1000">ABOUT <span class="text-color__highlight">US</span></h1>
         <h3 data-aos="fade-up" data-aos-duration="1000" class="subheading"><span class="text-color__highlight">Who</span> we are.</h3>
      </div>
   </div>
</div>
</div>
<div class="fluid-container">
   <div class="row row-content">
      <div class="col-md-8 offset-md-2">
         <p>Bradley Sports connects top high school baseball players with college coaches, getting our players signed to the right schools (DI, DII, DIII, NAIA, JUCO). Our model is simple: we get to know our players and their families, evaluate their potential, personally call the appropriate college coaches on their behalf and make it happen.</p>
         <p>The family invests $4,500 or five monthly installments of $1,000 for us to quarterback the entire recruitment process, from start to finish. We are experts and quite simply the best at what we do. Because of this, we can only work with players who are good enough to play in college, smart enough to get into the right school, and most of all, serious about finding the right fit at the next level (college) - both academically and athletically.</p>
         <p>Our differentiator lies in our personal relationships with hundreds of college coaches and our intimate knowledge of the game and the recruiting process (we are connected, and are all former college coaches and professional baseball scouts).</p>
         <p>Every player/family we take on will exceed their investment in scholarships earned, thus making our service basically free.  Our players have averaged approximately $20,000 per year in scholarships over the past year, which equates to 17 times their investment.</p>
         <p>For our Premium program (full price offering), we only accept serious college level prospects who are committed to doing what it takes to play at the next level. For both players and parents, it’s difficult to know where to go and what to do. We’re here for you.</p>
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