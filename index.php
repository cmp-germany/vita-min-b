<?php get_header(); ?>
<?php get_template_part('headerleiste');
<div class="container vb-content">
  <div class="row">
    <div class="col-md-9 contentsection">
      <?php
        $pageID = get_the_id();
        $page = get_page( $pageID );
        $content = apply_filters( 'the_content', $page->post_content );
        print $content;
      ?>
    </div>
  </div>
</div>
<?php get_footer(); ?>
