<?php if (!get_field('is-standalone')) { ?>
  <aside class="sidebar-area">
    <h2>Weitere Videos</h2>
    <ul class="videosidebar">
      <?php
      $count= 0;
      $args = array(
        'post_type' => 'vb_video',
        'order'   => 'ASC',
        'orderby' => 'rand',
      );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      if (get_field('video-id')==$currentVideo) continue;
      $count += 1;
      ?>
      <li><a href="<?= get_permalink() ?>"><img class="sidepicture" src="http://videos.united-studios.com/thumbnail.php?file=<?php the_field('video-id'); ?>.jpg&amp;width=312" /></a></li>
      <?php
      if ($count==3) break;
      endwhile; ?>
    </ul>
  </aside>
<?php } ?>
