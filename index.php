<?php get_header(); ?>
  <div class="row">
    <div class="col-sm-3 col-md-6 col-lg-6 col-lg-offset-3">
      <div class="page-header col-lg-12">
        <h1><?php the_title() ?></h1>
      </div>
      <?php
        $pageID = get_the_id();
        $page = get_page( $pageID );
        $content = apply_filters( 'the_content', $page->post_content );
        print $content;
      ?>
      <?php
      $args = array( 'post_type' => 'vb_superslides', 'posts_per_page' => 10 );
      $loop = new WP_Query( $args );
      while ( $loop->have_posts() ) : $loop->the_post();
      the_title();
      echo '<div class="entry-content">';
      the_field("subtitle");
      echo '</div>';
      endwhile;
      ?>
    </div>
  </div>
<?php get_footer(); ?>
