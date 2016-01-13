<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title><?php wp_title(); ?> - <?php bloginfo('name'); ?></title>

    <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" /> 
    <?php wp_head(); ?>
  </head>
  <body class="vmb">
  	<div class="row">
      <nav class="navbar navbar-default" role="navigation">
        <div class="navbar-header">
           
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
             <span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
          </button> <a class="navbar-brand" href="#"><img src="<?= get_template_directory_uri()?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"></a>
        </div>
        
        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li>
              <div class="form-group has-feedback has-feedback">
                <div class="inline-feedback">
                  <select onChange="window.location=this.value" style="width: 130px;">
                    <option>Motivation</option>
                    <option value="#">Motivation #1</option>
                    <option value="#">Motivation #2</option>
                    <option value="#">Motivation #3</option>
                  </select>
                  <img src="<?= get_template_directory_uri()?>/gfx/search-bar/search-bar-dropdown.png" class="form-control-feedback select">
                </div>
              </div>
            </li>
            <!-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Motivation<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Motivation #1</a>
                </li>
                <li>
                  <a href="#">Motivation #2</a>
                </li>
                <li>
                  <a href="#">Motivation #3</a>
                </li>
              </ul>
            </li> -->
            <li>
              <select onChange="window.location=this.value" style="width: 75px;">
                <option>Stars</option>
                <option value="#">Stars #1</option>
                <option value="#">Stars #2</option>
                <option value="#">Stars #3</option>
              </select>
            </li>
            <!-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Stars<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Stars #1</a>
                </li>
                <li>
                  <a href="#">Stars #2</a>
                </li>
                <li>
                  <a href="#">Stars #3</a>
                </li>
              </ul>
            </li> -->
            <li>
              <select onChange="window.location=this.value" style="width: 55px;">
                <option>TV</option>
                <option value="//videos.united-studios.com/mkg-fressnapf-weihnachtsgruss">MKG: Weihnachtsgrüße</option>
                <option value="//videos.united-studios.com/teaser-vita-min-b">Teaser Vita Min B</option>
                <option value="//videos.united-studios.com/sacred-heart-alumni-channel-2">Sacred Heart University - Alumni Channel</option>
                <option value="//videos.united-studios.com/fairwaltungskatalog-teaser-04">FAIRwaltungskatalog Teaser</option>
                <option value="//videos.united-studios.com/footprints-teaser">Footprints Teaser</option>
              </select>
            </li>
            <!-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">TV<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="http://videos.united-studios.com/teaser-vita-min-b">Teaser Vita Min B</a>
                </li>
                <li>
                  <a href="http://videos.united-studios.com/sacred-heart-alumni-channel-2">Sacred Heart University - Alumni Channel</a>
                </li>
                <li>
                  <a href="http://videos.united-studios.com/fairwaltungskatalog-teaser-04">FAIRwaltungskatalog Teaser</a>
                </li>
                <li>
                  <a href="http://videos.united-studios.com/footprints-teaser">Footprints Teaser</a>
                </li>
              </ul>
            </li> -->
            <li>
              <select onChange="window.location=this.value" style="width: 215px;">
                <option>Studio Produktionen</option>
                <option value="//www.united-studios.com/de/video/imagefilme.html">UnitedStudios: Imagefilme</option>
                <option value="//www.united-studios.com/de/video/produktfilme.html">UnitedStudios: Produktfilme</option>
                <option value="//www.united-studios.com/de/video/studioproduktionen.html">UnitedStudios: Studioproduktionen</option>
              </select>
            </li>
            <!-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Studio Produktionen<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="http://www.united-studios.com/de/video/imagefilme.html">UnitedStudios: Imagefilme</a>
                </li>
                <li>
                  <a href="http://www.united-studios.com/de/video/produktfilme.html">UnitedStudios: Produktfilme</a>
                </li>
                <li>
                  <a href="http://www.united-studios.com/de/video/studioproduktionen.html">UnitedStudios: Studioproduktionen</a>
                </li>
              </ul>
            </li> -->
            <li>
              <select onChange="window.location=this.value" style="width: 75px;">
                <option>Shop</option>
                <option value="http://ekom21.cmpg.eu">ekom21</option>
                <option value="http://ekom21.cmpg.eu">FAIRwaltungskatalog</option>
              </select>
            </li>
            <!-- <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop<strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="http://ekom21.cmpg.eu">ekom21</a>
                </li>
                <li>
                  <a href="http://ekom21.cmpg.eu">FAIRwaltungskatalog</a>
                </li>
              </ul>
            </li> -->
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li>
              <a href="#"><img src="<?= get_template_directory_uri()?>/gfx/nav/warenkorb-100.png" class="vmb-nav-icon"></a>
            </li>
            <li>
              <a href="#"><img src="<?= get_template_directory_uri()?>/gfx/nav/lupe-100.png" class="vmb-nav-icon"></a>
            </li>
            <li class="dropdown">
               <a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?= get_template_directory_uri()?>/gfx/nav/profil-100.png" class="vmb-nav-icon"><strong class="caret"></strong></a>
              <ul class="dropdown-menu">
                <li>
                  <a href="#">Action</a>
                </li>
                <li>
                  <a href="#">Another action</a>
                </li>
                <li>
                  <a href="#">Something else here</a>
                </li>
                <li class="divider">
                </li>
                <li>
                  <a href="#">Separated link</a>
                </li>
              </ul>
            </li>
          </ul>
        </div>
        
      </nav>
    </div>