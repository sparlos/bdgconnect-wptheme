<?php
$page = get_page_by_title('Footer');
$page_id = $page->ID;
?>

<div class="footer">
  <div class="footer__item">
    <span class="footer__text">
      <a href=""><?php echo CFS()->get('footer_address', $page_id); ?></a>
    </span>
  </div>
  <div class="footer__item">
    <span>
      <?php $icon_one = CFS()->get('first_icon', $page_id);
      ?>
      <a target="_blank" href="<?php echo CFS()->get('instagram', $page_id); ?>"><i class="fab fa-<?php echo reset($icon_one); ?>"></i></a>
      <a target="_blank" href="<?php echo CFS()->get('twitter', $page_id); ?>"><i class="fab fa-twitter"></i></a>
      <a target="_blank" href="<?php echo CFS()->get('youtube', $page_id); ?>"><i class="fab fa-youtube"></i></a>
      <a href="mailto:<?php echo CFS()->get('email', $page_id); ?>"><i class="far fa-envelope"></i></a>
    </span>
  </div>
  <div class="footer__item">
    <span class="footer__text"><a href="mailto:<?php echo CFS()->get('email', $page_id); ?>"><?php echo CFS()->get('email', $page_id); ?></a></span>
  </div>
</div>

		
<?php wp_footer(); ?> 
  </body>
</html>