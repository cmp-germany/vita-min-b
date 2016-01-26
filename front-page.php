<?php get_header(); ?>
  <div class="row" >
    <div id="slides">
      <ul class="slides-container">


        <?php
        $args = array(
          'post_type' => 'vb_superslides',
          'order'   => 'ASC',
        );
        $loop = new WP_Query( $args );
        while ( $loop->have_posts() ) : $loop->the_post();
        ?>

        <li id="<?= the_title(); ?>">
          <img src="<?= the_field("slide-img"); ?>" alt="">
          <a href="#"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo preserve"></a>
          <?php the_content(); ?>
          <div class="img-shadow"></div>
          <div class="slide-container">

            <div class="container-centered">
              <div class="container-heading">
                <h4>
                  <?php the_field("headertitle");?>
                </h4>
                <p class="subtitle">
                  <?php the_field("subtitle"); ?>
                </p>
              </div>
             <p><a href="<?= the_field("buttonlink"); ?>" class="btn btn-primary btn-big"><?php the_field("button");?></a></p>
             <p class="slogan"><?php the_field("slogan");?></p>
            </div>
          </div>
        </li>
        <?php endwhile; ?>

      </ul>
      <nav class="slides-navigation" style="top: 0; padding-top: 0;">
        <a href="#" class="next"><img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-pfeil-rechts.png" class="icon-next"></a>
        <a href="#" class="prev"><img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-pfeil-links.png" class="icon-prev"></a>
      </nav>
    </div>

  </div>
<?php get_footer(); ?>
</div>
