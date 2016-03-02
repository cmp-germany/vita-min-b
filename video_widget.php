<?php

  $video_categories = wp_get_post_terms($post->ID, 'vb_video_category');
  $terms = "";
  foreach ($video_categories as $video_category ) {
    $terms .= $video_category->slug . ',';
  }
  $terms = substr($terms, 0, -1);

  $ids = array();
  $ids[] = get_the_ID();

  $args = array(
    'post_type'    => 'vb_video',
    'post__not_in' => $ids,
    'order'        => 'ASC',
    'orderby'      => 'rand',
    'tax_query'    => array(array(
      'taxonomy' => 'vb_video_category',
      'field'    => 'slug',
      'terms'    => $terms
    ))
  );
  $loop = new WP_Query( $args );
?>
<?php if (!$is_standalone && $loop->have_posts()) { ?>
  <aside class="sidebar-area">
    <h2>Weitere Videos</h2>
    <ul class="videosidebar">
      <?php
      $count= 0;

      while ( $loop->have_posts() ) : $loop->the_post();
      $count += 1;
      ?>
      <li><a href="<?= get_permalink() ?>"><img class="sidepicture" src="http://videos.united-studios.com/thumbnail.php?file=<?= get_post_meta($post->ID, 'video-id', true) ?>.jpg&amp;width=312" /></a></li>
      <?php
      if ($count>3) break;
      endwhile; ?>
    </ul>
  </aside>
<?php } ?>
