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
    <div class="container-fluid" >
      <div class="navmenu navmenu-default navmenu-inverse navmenu-fixed-right offcanvas">
        <a href="#"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"/></a>
        <ul class="nav navmenu-nav">
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Shop <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="http://ekom21.cmpg.eu">ekom21</a></li>
              <li><a href="http://ekom21.cmpg.eu">FAIRwaltungskatalog</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">TV <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="//videos.united-studios.com/mkg-fressnapf-weihnachtsgruss">MKG: Weihnachtsgrüße</a></li>
              <li><a href="//videos.united-studios.com/teaser-vita-min-b">Teaser Vita Min B</a></li>
              <li><a href="//videos.united-studios.com/sacred-heart-alumni-channel-2">Sacred Heart University</a></li>
              <li><a href="//videos.united-studios.com/fairwaltungskatalog-teaser-04">FAIRwaltungskatalog Teaser</a></li>
              <li><a href="//videos.united-studios.com/footprints-teaser">Footprints Teaser</a></li>
            </ul>
          </li>
          <li class="dropdown"> <a href="#" class="dropdown-toggle" data-toggle="dropdown">Studio Produktionen <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="//www.united-studios.com/de/video/imagefilme.html">UnitedStudios: Imagefilme</a></li>
              <li><a href="//www.united-studios.com/de/video/produktfilme.html">UnitedStudios: Produktfilme</a></li>
              <li><a href="//www.united-studios.com/de/video/studioproduktionen.html">UnitedStudios: Studioproduktionen</a></li>
            </ul>
          </li>
        </ul>
        <!-- <ul class="nav navmenu-nav">
          <li><a href="../navmenu/">Slide in</a></li>
          <li class="active"><a href="./">Push</a></li>
          <li><a href="../navmenu-reveal/">Reveal</a></li>
          <li><a href="../navbar-offcanvas/">Off canvas navbar</a></li>
        </ul>
        <ul class="nav navmenu-nav">
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li><a href="#">Link</a></li>
          <li class="dropdown">
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <b class="caret"></b></a>
            <ul class="dropdown-menu navmenu-nav">
              <li><a href="#">Action</a></li>
              <li><a href="#">Another action</a></li>
              <li><a href="#">Something else here</a></li>
              <li class="divider"></li>
              <li class="dropdown-header">Nav header</li>
              <li><a href="#">Separated link</a></li>
              <li><a href="#">One more separated link</a></li>
            </ul>
          </li>
        </ul> -->
      </div>

      <div class="navbar navbar-inverse navbar-fixed-top navvmb">
        <!--<a class="navbar-brand" href="#"><img src="<?= get_template_directory_uri(); ?>/gfx/vita-min-b-logo-300.png" class="vmb-logo"></a>-->
        <button type="button" class="navbar-toggle" data-toggle="offcanvas" data-target=".navmenu" data-canvas="body">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
      </div>
