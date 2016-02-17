<?php get_header(); ?>
<?php
  $args = array(
    'post_type'  => 'vb_onepagerelement',
    'tax_query'  =>  array(
                       array(
                         'taxonomy' => 'vb_onepage',
                         'field'    => 'slug',
                         'terms'    => $wp_query->query['vb_onepage']
                       )
                     ),
    'orderby'    => 'menu_order',
    'order'      => 'ASC'
  );
  $the_query = new WP_Query( $args );
?>
<div class="skrollr-body">
  <section class="onepage-section">
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php debug_to_console(get_field('bild')); ?>
        <article id="<?= $post->post_name ?>" class="onepage-element">
          <div class="row">
            <div class="onepage-image">
              <img src="<?= get_field('bild')['url'] ?>" alt="<?= get_field('bild')['alt'] ?>">
            </div>
            <div class="onepage-header" data-bottom-top="opacity:0;" data-center-top="opacity:1;">
              <h2><?php the_title(); ?></h2>
            </div>
            <div class="onepage-content" data-bottom-top="opacity:0;" data-center-top="opacity:1;">
              <?php the_content(); ?>
            </div>
          </div>
        </article>
      <?php endwhile; ?>
    <?php endif; ?>
  </section>
</div>
<?php get_footer(); ?>
