<?php get_header(); ?>
  <div class="page-header col-md-12">
    <h1><?php the_title() ?></h1>
  </div>
  <?php
    $pageID = get_the_id();
    $page = get_page( $pageID );
    $content = apply_filters( 'the_content', $page->post_content );
    print $content;
  ?>
<?php get_footer(); ?>
