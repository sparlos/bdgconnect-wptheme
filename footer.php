<?php
$page = get_page_by_title('Footer');
$page_id = $page->ID;
?>

<div class="footer">
  <div class="footer__item">
    <span class="footer__text">
      <?php $address = CFS()->get('footer_address', $page_id); ?>
      <a target="_blank" href='https://maps.google.com/?q=<?php echo urlencode($address); ?>'><?php echo $address; ?></a>
    </span>
  </div>
  <div class="footer__item">
    <span>
      
      <?php $first_icon = CFS()->get('first_icon', $page_id);
      reset($first_icon);
      $second_icon = CFS()->get('second_icon', $page_id);
      reset($second_icon);
      $third_icon = CFS()->get('third_icon', $page_id);
      reset($third_icon);
      $fourth_icon = CFS()->get('fourth_icon', $page_id);
      reset($fourth_icon);
      
      $first_icon_link = CFS()->get('first_icon_link', $page_id);
      $second_icon_link = CFS()->get('second_icon_link', $page_id);
      $third_icon_link = CFS()->get('third_icon_link', $page_id);
      $fourth_icon_link = CFS()->get('fourth_icon_link', $page_id);
      
      $icons = array($first_icon, $second_icon, $third_icon, $fourth_icon);
      $icon_links = array($first_icon_link, $second_icon_link, $third_icon_link, $fourth_icon_link);
      
      foreach($icons as $key=>$icon) {
        if(reset($icon) == 'Email') {
          $icon_links[$key] = 'mailto:' . $icon_links[$key];
        }
      }
      
      ?>
      <a target="_blank" href="<?php echo $icon_links[0]; ?>"><i class="<?php echo key($first_icon); ?>"></i></a>
      <a target="_blank" href="<?php echo $icon_links[1]; ?>"><i class="<?php echo key($second_icon); ?>"></i></a>
      <a target="_blank" href="<?php echo $icon_links[2]; ?>"><i class="<?php echo key($third_icon); ?>"></i></a>
      <a target="_blank" href="<?php echo $icon_links[3]; ?>"><i class="<?php echo key($fourth_icon); ?>"></i></a>
    </span>
  </div>
  <div class="footer__item">
    <span class="footer__text"><a href="mailto:<?php echo CFS()->get('email', $page_id); ?>"><?php echo CFS()->get('email', $page_id); ?></a></span>
  </div>
</div>

		
<?php wp_footer(); ?> 
  </body>
</html>