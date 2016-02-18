<?php wp_enqueue_script( 'front-page-slides', get_template_directory_uri() . '/js/front-page-slides.js', array( 'superslides' ), null, true ); ?>
<?php wp_enqueue_script( 'skrollr-start', get_template_directory_uri() . '/js/skrollr-start.js', array( 'skrollr','front-page-slides' ), null, true ); ?>

<?php get_header(); ?>
<?php
  $links = true;

  function animation(&$links) {
    $linksanimation ='data-bottom="left:-40%;opacity:0;" data-100-top="left:0%;opacity:1;"';
    $rechtsanimation ='data-bottom="right:-40%;opacity:0;" data-100-top="right:0%;opacity:1;"';
    if ($links == true) {
      $links = false;
      return $linksanimation;
    }
    else {
      $links = true;
      return $rechtsanimation;
    }
  }

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



<section id="skrollr-body">

  <div class="row">
    <div class="page-header col-md-12">
      <div class="headerbild">
        <!--<img src="http://vita-min-b.info/wp-content/uploads/2016/01/Fotolia_79234053_L.jpg" alt="vita-min-b" />-->
        <div id="slides">
          <ul class="slides-container">
            <li>
              <img src="http://vita-min-b.info/wp-content/uploads/2016/01/Fotolia_79234053_L.jpg" alt="vita-min-b"/>
            </li>
          </ul>
        </div>
        <div class="overlay"></div>
        <div class="overlay-grad"></div>
      </div>
      <h1><?php single_tag_title(); ?></h1>
      <a class="arrow-down" href="#onepagerstory">
				<svg width="80" height="80" viewBox="0 0 80 80" version="1.1" xmlns="http://www.w3.org/2000/svg"><circle class="" cx="40" cy="40" r="32" /><line x1="20" y1="30" x2="40" y2="50" /><line x1="40" y1="50" x2="60" y2="30" /></svg>
      </a>
    </div>
  </div>
<div class="row">
    <section class="onepage-section" id="onepagerstory">
      <?php
        if ( $the_query->have_posts() ) : ?>
        <?php while ( $the_query->have_posts() ) : $the_query->the_post(); ?>
          <?php debug_to_console(get_field('bild')); ?>
          <article id="<?= $post->post_name ?>" class="onepage-element ">
            <div class="row">
              <div class="container">
                <div class="onepage-image col-md-6">

                  <img src="<?= get_field('bild')['url'] ?>" alt="<?= get_field('bild')['alt'] ?>" <?php echo animation($links) ?> style="position: relative;">
                </div>

                <div class="onepage-header col-md-6" data-bottom-top="opacity:0;" data-center-top="opacity:1;">
                  <h2><?php the_title(); ?></h2>
                </div>
                <div class="onepage-content col-md-6" data-bottom-top="opacity:0;" data-center-top="opacity:1;">
                  <?php the_content(); ?>
                </div>

              </div>
            </div>
          </article>
        <?php endwhile; ?>
      <?php endif; ?>
    </section>

</div>
</section>
<script type="text/javascript">
$= jQuery.noConflict();
$(function() {
$('a[href*="#"]:not([href="#"])').click(function() {
  if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
    var target = $(this.hash);
    target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
    if (target.length) {
      $('html, body').animate({
        scrollTop: target.offset().top
      }, 1000);
      return false;
    }
  }
});
});
</script>

<?php get_footer(); ?>
