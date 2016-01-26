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
      <?php while ( have_posts() ) : the_post(); ?>

			<h1><?php the_field('subtitle'); ?></h1>

			<img src="<?php the_field('slide-img'); ?>" />

		<?php endwhile; // end of the loop. ?>
    </div>
  </div>
<?php get_footer(); ?>
