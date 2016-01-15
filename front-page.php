<?php get_header(); ?>
<div class="container-fluid" >
  <div class="row" >
    <div id="slides">
      <ul class="slides-container">
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-1.jpg" alt="">
          <div class="container">
            <h4>
              Bewerber Videos
            </h4>
            <p>
              Mit Motivations-Videos die <em>echten</em> Bewerber finden
            </p>
            <button class="btn">Bewerber jetzt finden</button>
            <p class="slogan">Die Sneak Preview vor dem ersten Bewerbungsgespräch</p>
          </div>
        </li>
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/Fotolia_79234053_L.jpg" alt="">
          <div class="container">
            <h4>
              Bewerber Videos
            </h4>
            <p>
              Mit eigenem Motivationsvideo den <em>Traumjob</em> finden
            </p>
            <button>Traumjob jetzt finden</button>
            <p class="slogan">Hol dir die Hauptrolle im Film deines Lebens</p>
          </div>
        </li>
      </ul>
      <nav class="slides-navigation" style="top: 0; padding-top: 0;">
        <a href="#" class="next"><img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-pfeil-rechts.png" class="icon-next"></a>
        <a href="#" class="prev"><img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-pfeil-links.png" class="icon-prev"></a>
      </nav>
    </div>




  </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= get_template_directory_uri()?>/superslides/examples/javascripts/jquery.easing.1.3.js"></script>
<script src="<?= get_template_directory_uri()?>/superslides/examples/javascripts/jquery.animate-enhanced.min.js"></script>
<script src="<?= get_template_directory_uri()?>/superslides/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script>
var $ = jQuery.noConflict();
  $(function() {
    $('#slides').superslides({
      hashchange: false
    });
  });


</script>
<?php get_footer(); ?>
