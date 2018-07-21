<div class="footer">
  <div class="footer__item">
    <span class="footer__text">
      <a href=""><?php echo CFS()->get('footer_address', 85); ?></a>
    </span>
  </div>
  <div class="footer__item">
    <span>

      <?php $icon_one = CFS()->get('first_icon', 85);
      
      ?>

      <a target="_blank" href="<?php echo CFS()->get('instagram', 85); ?>"><i class="fab fa-<?php echo reset($icon_one); ?>"></i></a>
      <a target="_blank" href="<?php echo CFS()->get('twitter', 85); ?>"><i class="fab fa-twitter"></i></a>
      <a target="_blank" href="<?php echo CFS()->get('youtube', 85); ?>"><i class="fab fa-youtube"></i></a>
      <a href="mailto:<?php echo CFS()->get('email', 85); ?>"><i class="far fa-envelope"></i></a>
    </span>
  </div>
  <div class="footer__item">
    <span class="footer__text"><a href="mailto:<?php echo CFS()->get('email', 85); ?>"><?php echo CFS()->get('email', 85); ?></a></span>
  </div>
</div>

		
<?php wp_footer(); ?> 
  </body>
</html>