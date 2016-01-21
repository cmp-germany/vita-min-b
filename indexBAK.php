<?php get_header(); ?>
<div class="container-fluid">
  <div class="row">
    <div class="carousel slide" id="carousel-214677">
      <!--<ol class="carousel-indicators">
        <li class="active" data-slide-to="0" data-target="#carousel-214677">
        </li>
        <li data-slide-to="1" data-target="#carousel-214677">
        </li>
        <li data-slide-to="2" data-target="#carousel-214677">
        </li>
      </ol>-->
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
    </div>
  </div>
  <div class="row">
    <div class="vmb-search-bar-col col-md-12">
      <div class="center-block">
        <form role="form" class="form-inline">
          <div class="form-group has-feedback has-feedback-left">
            <label class="control-label sr-only" for="stichwort">
              Stichwort
            </label>
            <div class="inline-feedback">
              <input type="text" class="form-control" id="stichwort" placeholder="Stichwort" />
              <img src="<?= get_template_directory_uri()?>/gfx/search-bar/search-bar-lupe.png" class="form-control-feedback lupe">
            </div>
          </div>

          <div class="form-group has-feedback">
            <label class="sr-only" for="bereich">Bereich</label>
            <div class="inline-feedback">
              <select class="form-control" id="bereich" placeholder="Bereich">
                <option value="all">Bereich (Alle)</option>
                <option value="financial">Financial</option>
                <option value="administration">Administration</option>
                <option value="it-development">IT Development</option>
                <option value="media">Media</option>
                <option value="consulting">Consulting</option>
                <option value="marketing">Marketing</option>
              </select>
              <img src="<?= get_template_directory_uri()?>/gfx/search-bar/search-bar-dropdown.png" class="form-control-feedback select">
            </div>
            
          </div>

          <div class="form-group has-feedback">
            <label class="sr-only" for="level"></label>
            <div class="inline-feedback">
              <select class="form-control" id="level" placeholder="Level">
                <option value="0">Level (Beginner)</option>
                <option value="2">>2 Jahre Erfahrung</option>
                <option value="5">>5 Jahre Erfahrung</option>
                <option value="10">>10 Jahre Erfahrung</option>
                <option value="20">>20 Jahre Erfahrung</option>
              </select>
              <img src="<?= get_template_directory_uri()?>/gfx/search-bar/search-bar-dropdown.png" class="form-control-feedback select">
            </div>
          </div>

          <div class="form-group has-feedback has-feedback-left">
            <label class="sr-only" for="ort">
              Ort
            </label>
            <div class="inline-feedback">
              <input type="text" class="form-control" id="ort" placeholder="Ort" />
              <img src="<?= get_template_directory_uri()?>/gfx/search-bar/search-bar-ort.png" class="form-control-feedback ort">
            </div>
          </div>

          <div class="form-group">
            <button type="submit" class="btn btn-default">
              Suchen
            </button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <div class="media vmb-bewerber-card">
           <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="<?= get_template_directory_uri()?>/gfx/bewerber-cards/bewerber-1.jpg" class="media-object" /></a>
          <div class="media-body">
            <h4 class="media-heading">
              Neuester Bewerber
            </h4>Es hat lange gedauert, bis ich begriffen habe, was es bedeutet, ein blinder Text zu sein. keinen Sinn. Man wirkt hier und da aus dem Zusammenhang gerissen. Oft wird man gar nicht erst gelesen. Aber bin ich deshalb ein schlechter Text?
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media vmb-bewerber-card">
          <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="<?= get_template_directory_uri()?>/gfx/bewerber-cards/bewerber-1.jpg" class="media-object" /></a>
          <div class="media-body">
            <h4 class="media-heading">
              Neuester Bewerber
            </h4>Ich bin Blindtext. Von Geburt an. Es hat lange gedauert, bis ich begriffen habe, was es bedeutet, ein blinder Text zu sein: Man macht keinen Sinn. Man wirkt hier und da aus dem Zusammenhang gerissen. Oft wird man gar nicht erst Es hat lange gedauert, bis ich begriffen habe.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media vmb-bewerber-card">
           <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="<?= get_template_directory_uri()?>/gfx/bewerber-cards/bewerber-1.jpg" class="media-object" /></a>
          <div class="media-body">
            <h4 class="media-heading">
              Neuester Bewerber
            </h4>Es hat lange gedauert, bis ich begriffen habe, was es bedeutet, ein blinder Text zu sein. keinen Sinn. Man wirkt hier und da aus dem Zusammenhang gerissen. Oft wird man gar nicht erst gelesen. Aber bin ich deshalb ein schlechter Text?
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media vmb-bewerber-card">
          <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="<?= get_template_directory_uri()?>/gfx/bewerber-cards/bewerber-1.jpg" class="media-object" /></a>
          <div class="media-body">
            <h4 class="media-heading">
              Neuester Bewerber
            </h4>Ich bin Blindtext. Von Geburt an. Es hat lange gedauert, bis ich begriffen habe, was es bedeutet, ein blinder Text zu sein: Man macht keinen Sinn. Man wirkt hier und da aus dem Zusammenhang gerissen. Oft wird man gar nicht erst Es hat lange gedauert, bis ich begriffen habe.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media vmb-bewerber-card">
          <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="<?= get_template_directory_uri()?>/gfx/bewerber-cards/bewerber-1.jpg" class="media-object" /></a>
          <div class="media-body">
            <h4 class="media-heading">
              Neuester Bewerber
            </h4>Ich bin Blindtext. Von Geburt an. Es hat lange gedauert, bis ich begriffen habe, was es bedeutet, ein blinder Text zu sein: Man macht keinen Sinn. Man wirkt hier und da aus dem Zusammenhang gerissen. Oft wird man gar nicht erst Es hat lange gedauert, bis ich begriffen habe.
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <div class="media vmb-bewerber-card">
          <a href="#" class="pull-left"><img alt="Bootstrap Media Preview" src="<?= get_template_directory_uri()?>/gfx/bewerber-cards/bewerber-1.jpg" class="media-object" /></a>
          <div class="media-body">
            <h4 class="media-heading">
              Neuester Bewerber
            </h4>Ich bin Blindtext. Von Geburt an. Es hat lange gedauert, bis ich begriffen habe, was es bedeutet, ein blinder Text zu sein: Man macht keinen Sinn. Man wirkt hier und da aus dem Zusammenhang gerissen. Oft wird man gar nicht erst Es hat lange gedauert, bis ich begriffen habe.
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- <footer class="footer">
  <div class="container-fluid">
    <div class="col-xs-1"><p class="footer-copyright">©VitaMinB</p></div>
    <div class="col-xs-2 col-xs-offset-9">
      <ul class="footer-links-list">
        <li><a href="#">Impressum</a></li>
        <li><a href="#">AGB</a></li>
        <li><a href="#">facebook</a></li>
      </ul>
    </div>
  </div>
</footer> -->
<?php get_footer(); ?>




