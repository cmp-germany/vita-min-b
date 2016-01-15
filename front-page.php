<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <!--<div class="carousel slide" id="carousel-214677">
      <div class="carousel-inner">
        <div class="item active">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-1.jpg" />
          <div class="carousel-caption">
            <h4>
              Bewerber Videos
            </h4>
            <p>
              Mit Motivations-Videos die <em>echten</em> Bewerber finden
            </p>
            <button class="btn">Bewerber jetzt finden</button>
            <p class="slogan">Die Sneak Preview vor dem ersten Bewerbungsgespräch</p>
          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/Fotolia_79234053_L.jpg" />
          <div class="carousel-caption">
            <h4>
              Bewerber Videos
            </h4>
            <p>
              Mit eigenem Motivationsvideo den <em>Traumjob</em> finden
            </p>
            <button>Traumjob jetzt finden</button>
            <p class="slogan">Hol dir die Hauptrolle im Film deines Lebens</p>
          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-3.jpg" />
          <div class="carousel-caption">
            <h4>
              Studio Productions
            </h4>
            <p>
              Mit eigener Nachrichtenstudio Technologie Mitarbeiter und Kunden im TV Format tagesaktuell informieren
            </p>
            <button>Beispiel Video anschauen</button>

          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/fairwaltungskatalog-teaser-04-1.jpg" />
          <div class="carousel-caption">
            <h4>
              Imagefilme
            </h4>
            <p>
              Mit eigenen Imagefilmen Kundengruppen emotional ansprechen
            </p>
            <button>Beispiel Video anschauen</button>
          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/xtrafit-shop.png" />
          <div class="carousel-caption">
            <h4>
              Shop in Shop Systeme
            </h4>
            <p>
              Mit eigenem Online Shop die internet affine Kundengruppe ansprechen und Vertriebspartnern Whitelabel Lösungen anbieten
            </p>
            <button>Beispiel Shop ansehen</button>
          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/mkg-fressnapf-weihnachtsgruss.jpg" />
          <div class="carousel-caption">
            <h4>
              Jugendförderung
            </h4>
            <p>
              Unterstützen Sie junge Talente aus Ihrer Umgebung
            </p>
            <button>Talente jetzt finden</button>
          </div>
        </div>
      </div>

      <a class="left carousel-control" href="#carousel-214677" data-slide="prev"><img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-pfeil-links.png" class="icon-next"></a>
      <a class="right carousel-control" href="#carousel-214677" data-slide="next"><img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-pfeil-rechts.png" class="icon-next"></a>
    </div>-->

    <div id="slides">
      <ul class="slides-container">
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-1.jpg" alt="">
          <div class="container">
            Slide one
          </div>
        </li>
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-2.jpg" alt="">
          <div class="container">
            Slide two
          </div>
        </li>
      </ul>
      <nav class="slides-navigation" style="background: none;">
        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Previous</a>
      </nav>
    </div>




  </div>
</div>

<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="<?= get_template_directory_uri()?>/superslides/examples/javascripts/jquery.easing.1.3.js"></script>
<script src="<?= get_template_directory_uri()?>/superslides/examplesjavascripts/jquery.animate-enhanced.min.js"></script>
<script src="<?= get_template_directory_uri()?>/superslides/dist/jquery.superslides.js" type="text/javascript" charset="utf-8"></script>
<script>
var $ = jQuery.noConflict();
  $(function() {
    $('#slides').superslides({
      hashchange: true
    });
  });
</script>

<!--
<script type="text/javascript">
var $ = jQuery.noConflict();
$(document).ready(function(){
      $( window ).resize(function() {
      var window_width= $(document).width();
      var window_height= $(document).height();

      $('#carousel-214677').css('height', $(document).height()+'px');
      $('.carousel-inner').css('height', $(document).height()+'px');
      console.log('height: ' + $(document).height());
      console.log('width: ' + window_width);
    });
});
</script>-->
<?php get_footer(); ?>
