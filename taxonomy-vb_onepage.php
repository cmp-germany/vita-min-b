<?php wp_enqueue_script( 'skrollr-start', get_template_directory_uri() . '/js/skrollr-start.js', array( 'skrollr' ), null, true ); ?>
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
<div class="row">
  <div class="page-header col-md-12">
    <div class="headerbild">
      <img src="http://vita-min-b.info/wp-content/uploads/2016/01/Fotolia_79234053_L.jpg" alt="vita-min-b" style="max-width:100%;min-height:100%"/>
      <div class="overlay"></div>
    </div>
    <h1><?php the_title() ?></h1>
  </div>
</div>
<div class="skrollr-body">
  <section class="onepage-section">
    <?php if ( $the_query->have_posts() ) : ?>
      <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
        <?php debug_to_console(get_field('bild')); ?>
        <article id="<?= $post->post_name ?>" class="onepage-element">
          <div class="row">
            <div class="onepage-image">
              <img src="<?= get_field('bild')['url'] ?>" alt="<?= get_field('bild')['alt'] ?>" data-bottom="left:-40%;opacity:0;" data-100-top="left:0%;opacity:1;" style="position: relative;">
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
