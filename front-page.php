<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <!--<div class="carousel slide" id="carousel-214677">
      <div class="carousel-inner">
        <div class="item active">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-1.jpg" />
          <div class="carousel-caption">
            <h4>
              Die beste Wirkstoffkombination
            </h4>
            <p>
              Mit Motivations-Video die <em>echten</em> Bewerber finden!
            </p>
            <button class="btn">Bewerber jetzt finden</button>
          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-2.jpg" />
          <div class="carousel-caption">
            <h4>
              Die beste Wirkstoffkombination
            </h4>
            <p>
              Mit Motivations-Video die <em>echten</em> Bewerber finden!
            </p>
            <button>Bewerber jetzt finden</button>
          </div>
        </div>
        <div class="item">
          <img alt="Carousel" src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-3.jpg" />
          <div class="carousel-caption">
            <h4>
              Die beste Wirkstoffkombination
            </h4>
            <p>
              Mit Motivations-Video die <em>echten</em> Bewerber finden!
            </p>
            <button>Bewerber jetzt finden</button>
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
        <li>
          <img src="<?= get_template_directory_uri()?>/gfx/carousel/carousel-3.jpg" alt="">
          <div class="container">
            Slide three
          </div>
        </li>
      </ul>
      <nav class="slides-navigation">
        <a href="#" class="next">Next</a>
        <a href="#" class="prev">Previous</a>
      </nav>
    </div>




  </div>
</div>
</div>

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