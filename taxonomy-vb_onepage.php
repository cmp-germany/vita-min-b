<?php get_header(); ?>
<?php debug_to_console($wp_query->query['vb_onepage']); ?>
<?php
  $args = array(
    'post_type'  => 'vb_onepagerelement',
    'orderby'    => 'menu_order',
    'order'      => 'ASC'
  );
  $the_query = new WP_Query( $args );
?>
  <div class="row">
    <div class="col-sm-3 col-md-6 col-lg-6 col-lg-offset-3">
      <?php if ( $the_query->have_posts() ) : ?>
        <div class="page-header col-lg-12">
          <h1><?php the_title() ?></h1>
        </div>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php debug_to_console($post); ?>
          <div class="onepage-element col-lg-12">
            <div class="onepage-head">
              <h1><?php the_title() ?></h1>
            </div>
            <div class="onepage-content">
              <?php the_content(); ?>
            </div>
          </div>
    			<?php endwhile; ?>
      <?php endif; ?>
    </div>
  </div>
<?php get_footer(); ?>
