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
            <a href="#" class="btn">Bewerber jetzt finden</a>
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
            <a href="#" class="btn">Traumjob jetzt finden</a>
            <p class="slogan">Hol dir die Hauptrolle im Film deines Lebens</p>
          </div>
        </li>
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-3.jpg" alt="">
          <div class="container">
            <h4>
              Studio Productions
            </h4>
            <p>
              Mit eigener Nachrichtenstudio Technologie Mitarbeiter und Kunden im TV Format tagesaktuell informieren
            </p>
            <a href="#" class="btn">Beispiel Video anschauen</a>
          </div>
        </li>
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/fairwaltungskatalog-teaser-04-1.jpg" alt="">
          <div class="container">
            <h4>
              Imagefilme
            </h4>
            <p>
              Mit eigenen Imagefilmen Kundengruppen emotional ansprechen
            </p>
            <a href="#" class="btn">Beispiel Video anschauen</a>
          </div>
        </li>
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/xtrafit-shop.png" alt="">
          <div class="container">
            <h4>
              Shop in Shop Systeme
            </h4>
            <p>
              Mit eigenem Online Shop die internet affine Kundengruppe ansprechen und Vertriebspartnern Whitelabel Lösungen anbieten
            </p>
            <a href="#" class="btn">Beispiel Shop ansehen</a>
          </div>
        </li>
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-2.jpg" alt="">
          <div class="container">
            <h4>
              Jugendförderung
            </h4>
            <p>
              Unterstützen Sie junge Talente aus Ihrer Umgebung
            </p>
            <a href="http://videos.united-studios.com/mkg-fressnapf-weihnachtsgruss" class="btn">Talente jetzt finden</a>
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

  $(document).ready(function(){
				var height = $(window).height();
				$(".next").height(height);
        $(".prev").height(height);
				$(window).resize(function(){
					height  = $(window).height();
					$(".next").height(height);
					$(".prev").height(height);
				});
			});


</script>
<?php get_footer(); ?>
</div>
