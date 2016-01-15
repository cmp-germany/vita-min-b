<?php get_header(); ?>
<div class="container-fluid" >
  <div class="row" >
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
